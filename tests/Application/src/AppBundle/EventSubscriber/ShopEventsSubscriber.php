<?php

declare(strict_types=1);

namespace AppBundle\EventSubscriber;

use Setono\TagBagBundle\HttpFoundation\Session\Tag\TagBagInterface;
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

    public static function getSubscribedEvents()
    {
        return [
            'sylius.product.show' => 'productShow',
        ];
    }

    public function productShow(ResourceControllerEvent $controllerEvent)
    {
        $product = $controllerEvent->getSubject();
        if (!$product instanceof ProductInterface) {
            return;
        }

        $this->tagBag->addScript(
            sprintf('alert("You now viewing %s!");', addslashes($product->getName())),
            TagBagInterface::SECTION_HEAD
        );
    }
}
