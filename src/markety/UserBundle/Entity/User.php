<?php
/**
 * Created by PhpStorm.
 * User: doried
 * Date: 27/08/16
 * Time: 10:13 ص
 */

namespace markety\UserBundle\Entity;
use FOS\UserBundle\Model\User as FOSUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends FOSUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="bigint")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }

    // Inherited fields from parent
    protected $username;
    protected $usernameCanonical;
    protected $email;
    protected $emailCanonical;
    protected $confirmationToken;
    protected $credentialsExpireAt;
    protected $credentialsExpired;
    protected $enabled;
    protected $expired;
    protected $expiresAt;
    protected $groups;
    protected $lastLogin;
    protected $locked;
    protected $password;
    protected $passwordRequestedAt;
    protected $plainPassword;
    protected $roles;
    protected $salt;

    // Added Fields
    /**
     * @var $firstName string
     */
    protected $firstName;
    /**
     * @var $lastName string
     */
    protected $lastName;

    /**
     * @var $middleName string
     */
    protected $middleName;

    /**
     * @var $dateOfBirth \DateTime
     */
    protected $dateOfBirth;

    /**
     * @var $gender string "male"|"female"
     */
    protected $gender;

    /**
     * @var ContactMethod
     */
    protected $primaryContact;





}