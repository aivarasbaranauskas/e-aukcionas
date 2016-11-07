<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Item
 */
class Item
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $lastUpdated;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $currentPrice = 0;

    /**
     * @var string
     */
    private $basePrice = 0;

    /**
     * @var \DateTime
     */
    private $auctionStart;

    /**
     * @var \DateTime
     */
    private $auctionEnd;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $photos;

    /**
     * @var User
     */
    private $owner;

    /**
     * @var Photo
     */
    private $photo;

    /**
     * @var string
     */
    private $buyNowPrice = 0;

    /**
     * @var User
     */
    private $buyer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->photos = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Item
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     *
     * @return Item
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;

        return $this;
    }

    /**
     * Get lastUpdated
     *
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Item
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set currentPrice
     *
     * @param string $currentPrice
     *
     * @return Item
     */
    public function setCurrentPrice($currentPrice)
    {
        if (null === $currentPrice) {
            $this->currentPrice = 0;
        } else {
            $this->currentPrice = $currentPrice;
        }

        return $this;
    }

    /**
     * Get currentPrice
     *
     * @return string
     */
    public function getCurrentPrice()
    {
        return $this->currentPrice;
    }

    /**
     * Set basePrice
     *
     * @param string $basePrice
     *
     * @return Item
     */
    public function setBasePrice($basePrice)
    {
        if (null === $basePrice) {
            $this->basePrice = 0;
        } else {
            $this->basePrice = $basePrice;
        }

        return $this;
    }

    /**
     * Get basePrice
     *
     * @return string
     */
    public function getBasePrice()
    {
        return $this->basePrice;
    }

    /**
     * Set auctionStart
     *
     * @param \DateTime $auctionStart
     *
     * @return Item
     */
    public function setAuctionStart($auctionStart)
    {
        $this->auctionStart = $auctionStart;

        return $this;
    }

    /**
     * Get auctionStart
     *
     * @return \DateTime
     */
    public function getAuctionStart()
    {
        return $this->auctionStart;
    }

    /**
     * Set auctionEnd
     *
     * @param \DateTime $auctionEnd
     *
     * @return Item
     */
    public function setAuctionEnd($auctionEnd)
    {
        $this->auctionEnd = $auctionEnd;

        return $this;
    }

    /**
     * Get auctionEnd
     *
     * @return \DateTime
     */
    public function getAuctionEnd()
    {
        return $this->auctionEnd;
    }

    /**
     * Add photo
     *
     * @param Photo $photo
     *
     * @return Item
     */
    public function addPhoto(Photo $photo)
    {
        $this->photos[] = $photo;

        return $this;
    }

    /**
     * Remove photo
     *
     * @param Photo $photo
     */
    public function removePhoto(Photo $photo)
    {
        $this->photos->removeElement($photo);
    }

    /**
     * Get photos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set owner
     *
     * @param User $owner
     *
     * @return Item
     */
    public function setOwner(User $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set photo
     *
     * @param Photo $photo
     *
     * @return Item
     */
    public function setPhoto(Photo $photo = null)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return Photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set buyNowPrice
     *
     * @param string $buyNowPrice
     *
     * @return Item
     */
    public function setBuyNowPrice($buyNowPrice)
    {
        if (null === $buyNowPrice) {
            $this->buyNowPrice = 0;
        } else {
            $this->buyNowPrice = $buyNowPrice;
        }

        return $this;
    }

    /**
     * Get buyNowPrice
     *
     * @return string
     */
    public function getBuyNowPrice()
    {
        return $this->buyNowPrice;
    }

    /**
     * Set buyer
     *
     * @param User $buyer
     *
     * @return Item
     */
    public function setBuyer(User $buyer = null)
    {
        $this->buyer = $buyer;

        return $this;
    }

    /**
     * Get buyer
     *
     * @return User
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * Add comment
     *
     * @param Comment $comment
     *
     * @return Item
     */
    public function addComment(Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param Comment $comment
     */
    public function removeComment(Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
