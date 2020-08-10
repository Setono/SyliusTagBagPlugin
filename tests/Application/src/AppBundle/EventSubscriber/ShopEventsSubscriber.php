<?php

declare(strict_types=1);

namespace AppBundle\EventSubscriber;

use Setono\TagBag\Tag\ScriptTag;
use Setono\TagBag\TagBagInterface;
use Sylius\Bundle\ResourceBundle\Event\ResourceControllerEvent;
use Sylius\Component\Core\Model\ProductInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ShopEventsSubscriber implements EventSubscriberInterface
{
    /**
     * @var TagBagInterface
     */
    protected $tagBag;

    public function __construct(TagBagInterface $tagBag)
    {
        $this->tagBag = $tagBag;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'sylius.product.show' => 'productShow',
        ];
    }

    public function productShow(ResourceControllerEvent $controllerEvent): void
    {
        $product = $controllerEvent->getSubject();
        if (!$product instanceof ProductInterface) {
            return;
        }

        $this->tagBag->addTag(
            new ScriptTag(sprintf('alert("You now viewing %s!");', addslashes($product->getName()))),
        );
    }
}
