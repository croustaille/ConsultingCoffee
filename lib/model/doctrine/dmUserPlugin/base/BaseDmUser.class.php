<?php

/**
 * BaseDmUser
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $username
 * @property string $email
 * @property string $algorithm
 * @property string $salt
 * @property string $password
 * @property boolean $is_active
 * @property boolean $is_super_admin
 * @property timestamp $last_login
 * @property string $title
 * @property string $firstname
 * @property string $cellphonenumber
 * @property string $fixephoneNumber
 * @property string $faxNumber
 * @property string $society
 * @property string $adress
 * @property string $zipcode
 * @property string $city
 * @property clob $description
 * @property integer $photo
 * @property integer $country
 * @property date $datepayement
 * @property integer $expertise
 * @property integer $sector
 * @property integer $usertype
 * @property boolean $isConsultant
 * @property boolean $isRecruteur
 * @property boolean $isSupplier
 * @property Doctrine_Collection $Groups
 * @property Doctrine_Collection $Permissions
 * @property DmMedia $Photo
 * @property Sector $Sector
 * @property Expertise $Expertise
 * @property Usertype $Usertype
 * @property Country $Country
 * @property Doctrine_Collection $DmLock
 * @property Doctrine_Collection $DmUserPermission
 * @property Doctrine_Collection $DmUserGroup
 * @property DmRememberKey $RememberKeys
 * @property Doctrine_Collection $Cv
 * @property Doctrine_Collection $Hotideas
 * @property Doctrine_Collection $Job
 * 
 * @method string              getUsername()         Returns the current record's "username" value
 * @method string              getEmail()            Returns the current record's "email" value
 * @method string              getAlgorithm()        Returns the current record's "algorithm" value
 * @method string              getSalt()             Returns the current record's "salt" value
 * @method string              getPassword()         Returns the current record's "password" value
 * @method boolean             getIsActive()         Returns the current record's "is_active" value
 * @method boolean             getIsSuperAdmin()     Returns the current record's "is_super_admin" value
 * @method timestamp           getLastLogin()        Returns the current record's "last_login" value
 * @method string              getTitle()            Returns the current record's "title" value
 * @method string              getFirstname()        Returns the current record's "firstname" value
 * @method string              getCellphonenumber()  Returns the current record's "cellphonenumber" value
 * @method string              getFixephoneNumber()  Returns the current record's "fixephoneNumber" value
 * @method string              getFaxNumber()        Returns the current record's "faxNumber" value
 * @method string              getSociety()          Returns the current record's "society" value
 * @method string              getAdress()           Returns the current record's "adress" value
 * @method string              getZipcode()          Returns the current record's "zipcode" value
 * @method string              getCity()             Returns the current record's "city" value
 * @method clob                getDescription()      Returns the current record's "description" value
 * @method integer             getPhoto()            Returns the current record's "photo" value
 * @method integer             getCountry()          Returns the current record's "country" value
 * @method date                getDatepayement()     Returns the current record's "datepayement" value
 * @method integer             getExpertise()        Returns the current record's "expertise" value
 * @method integer             getSector()           Returns the current record's "sector" value
 * @method integer             getUsertype()         Returns the current record's "usertype" value
 * @method boolean             getIsConsultant()     Returns the current record's "isConsultant" value
 * @method boolean             getIsRecruteur()      Returns the current record's "isRecruteur" value
 * @method boolean             getIsSupplier()       Returns the current record's "isSupplier" value
 * @method Doctrine_Collection getGroups()           Returns the current record's "Groups" collection
 * @method Doctrine_Collection getPermissions()      Returns the current record's "Permissions" collection
 * @method DmMedia             getPhoto()            Returns the current record's "Photo" value
 * @method Sector              getSector()           Returns the current record's "Sector" value
 * @method Expertise           getExpertise()        Returns the current record's "Expertise" value
 * @method Usertype            getUsertype()         Returns the current record's "Usertype" value
 * @method Country             getCountry()          Returns the current record's "Country" value
 * @method Doctrine_Collection getDmLock()           Returns the current record's "DmLock" collection
 * @method Doctrine_Collection getDmUserPermission() Returns the current record's "DmUserPermission" collection
 * @method Doctrine_Collection getDmUserGroup()      Returns the current record's "DmUserGroup" collection
 * @method DmRememberKey       getRememberKeys()     Returns the current record's "RememberKeys" value
 * @method Doctrine_Collection getCv()               Returns the current record's "Cv" collection
 * @method Doctrine_Collection getHotideas()         Returns the current record's "Hotideas" collection
 * @method Doctrine_Collection getJob()              Returns the current record's "Job" collection
 * @method DmUser              setUsername()         Sets the current record's "username" value
 * @method DmUser              setEmail()            Sets the current record's "email" value
 * @method DmUser              setAlgorithm()        Sets the current record's "algorithm" value
 * @method DmUser              setSalt()             Sets the current record's "salt" value
 * @method DmUser              setPassword()         Sets the current record's "password" value
 * @method DmUser              setIsActive()         Sets the current record's "is_active" value
 * @method DmUser              setIsSuperAdmin()     Sets the current record's "is_super_admin" value
 * @method DmUser              setLastLogin()        Sets the current record's "last_login" value
 * @method DmUser              setTitle()            Sets the current record's "title" value
 * @method DmUser              setFirstname()        Sets the current record's "firstname" value
 * @method DmUser              setCellphonenumber()  Sets the current record's "cellphonenumber" value
 * @method DmUser              setFixephoneNumber()  Sets the current record's "fixephoneNumber" value
 * @method DmUser              setFaxNumber()        Sets the current record's "faxNumber" value
 * @method DmUser              setSociety()          Sets the current record's "society" value
 * @method DmUser              setAdress()           Sets the current record's "adress" value
 * @method DmUser              setZipcode()          Sets the current record's "zipcode" value
 * @method DmUser              setCity()             Sets the current record's "city" value
 * @method DmUser              setDescription()      Sets the current record's "description" value
 * @method DmUser              setPhoto()            Sets the current record's "photo" value
 * @method DmUser              setCountry()          Sets the current record's "country" value
 * @method DmUser              setDatepayement()     Sets the current record's "datepayement" value
 * @method DmUser              setExpertise()        Sets the current record's "expertise" value
 * @method DmUser              setSector()           Sets the current record's "sector" value
 * @method DmUser              setUsertype()         Sets the current record's "usertype" value
 * @method DmUser              setIsConsultant()     Sets the current record's "isConsultant" value
 * @method DmUser              setIsRecruteur()      Sets the current record's "isRecruteur" value
 * @method DmUser              setIsSupplier()       Sets the current record's "isSupplier" value
 * @method DmUser              setGroups()           Sets the current record's "Groups" collection
 * @method DmUser              setPermissions()      Sets the current record's "Permissions" collection
 * @method DmUser              setPhoto()            Sets the current record's "Photo" value
 * @method DmUser              setSector()           Sets the current record's "Sector" value
 * @method DmUser              setExpertise()        Sets the current record's "Expertise" value
 * @method DmUser              setUsertype()         Sets the current record's "Usertype" value
 * @method DmUser              setCountry()          Sets the current record's "Country" value
 * @method DmUser              setDmLock()           Sets the current record's "DmLock" collection
 * @method DmUser              setDmUserPermission() Sets the current record's "DmUserPermission" collection
 * @method DmUser              setDmUserGroup()      Sets the current record's "DmUserGroup" collection
 * @method DmUser              setRememberKeys()     Sets the current record's "RememberKeys" value
 * @method DmUser              setCv()               Sets the current record's "Cv" collection
 * @method DmUser              setHotideas()         Sets the current record's "Hotideas" collection
 * @method DmUser              setJob()              Sets the current record's "Job" collection
 * 
 * @package    ConsultingCoffee
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDmUser extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dm_user');
        $this->hasColumn('username', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('algorithm', 'string', 128, array(
             'type' => 'string',
             'default' => 'sha1',
             'notnull' => true,
             'length' => 128,
             ));
        $this->hasColumn('salt', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('password', 'string', 128, array(
             'type' => 'string',
             'length' => 128,
             ));
        $this->hasColumn('is_active', 'boolean', null, array(
             'type' => 'boolean',
             'default' => true,
             ));
        $this->hasColumn('is_super_admin', 'boolean', null, array(
             'type' => 'boolean',
             'default' => false,
             ));
        $this->hasColumn('last_login', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('title', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('firstname', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('cellphonenumber', 'string', 30, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 30,
             ));
        $this->hasColumn('fixephoneNumber', 'string', 30, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 30,
             ));
        $this->hasColumn('faxNumber', 'string', 30, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 30,
             ));
        $this->hasColumn('society', 'string', 120, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 120,
             ));
        $this->hasColumn('adress', 'string', 300, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 300,
             ));
        $this->hasColumn('zipcode', 'string', 20, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 20,
             ));
        $this->hasColumn('city', 'string', 120, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 120,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             'extra' => 'markdown',
             ));
        $this->hasColumn('photo', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('country', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('datepayement', 'date', null, array(
             'type' => 'date',
             'notnull' => false,
             ));
        $this->hasColumn('expertise', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('sector', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('usertype', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('isConsultant', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => false,
             ));
        $this->hasColumn('isRecruteur', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => false,
             ));
        $this->hasColumn('isSupplier', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => false,
             ));


        $this->index('is_active_idx', array(
             'fields' => 
             array(
              0 => 'is_active',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('DmGroup as Groups', array(
             'refClass' => 'DmUserGroup',
             'local' => 'dm_user_id',
             'foreign' => 'dm_group_id'));

        $this->hasMany('DmPermission as Permissions', array(
             'refClass' => 'DmUserPermission',
             'local' => 'dm_user_id',
             'foreign' => 'dm_permission_id'));

        $this->hasOne('DmMedia as Photo', array(
             'local' => 'photo',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('Sector', array(
             'local' => 'sector',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('Expertise', array(
             'local' => 'expertise',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('Usertype', array(
             'local' => 'usertype',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasOne('Country', array(
             'local' => 'country',
             'foreign' => 'id',
             'onDelete' => 'RESTRICT'));

        $this->hasMany('DmLock', array(
             'local' => 'id',
             'foreign' => 'user_id'));

        $this->hasMany('DmUserPermission', array(
             'local' => 'id',
             'foreign' => 'dm_user_id'));

        $this->hasMany('DmUserGroup', array(
             'local' => 'id',
             'foreign' => 'dm_user_id'));

        $this->hasOne('DmRememberKey as RememberKeys', array(
             'local' => 'id',
             'foreign' => 'dm_user_id'));

        $this->hasMany('Cv', array(
             'local' => 'id',
             'foreign' => 'user'));

        $this->hasMany('Hotideas', array(
             'local' => 'id',
             'foreign' => 'author'));

        $this->hasMany('Job', array(
             'local' => 'id',
             'foreign' => 'author'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}