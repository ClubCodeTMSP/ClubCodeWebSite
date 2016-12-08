<?php
// src/AppBundle/Entity/Atelier.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

class Atelier
{
    private $titre;
    private $date;
    private $user_pseudo;
		private $category;
		private $description_short;
		private $description_long;
		
		
		/**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the atelier vignette as a png file.")
     * @Assert\File(mimeTypes={ "application/png" })
     */
    private $vignette;
}