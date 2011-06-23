<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version5 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('dm_user', 'title', 'string', '10', array(
             'notnull' => '1',
             ));
        $this->addColumn('dm_user', 'firstname', 'string', '100', array(
             'notnull' => '1',
             ));
        $this->addColumn('dm_user', 'cellphonenumber', 'string', '30', array(
             'notnull' => '',
             ));
        $this->addColumn('dm_user', 'fixephonenumber', 'string', '30', array(
             'notnull' => '',
             ));
        $this->addColumn('dm_user', 'faxnumber', 'string', '30', array(
             'notnull' => '',
             ));
        $this->addColumn('dm_user', 'society', 'string', '120', array(
             'notnull' => '1',
             ));
        $this->addColumn('dm_user', 'adress', 'string', '300', array(
             'notnull' => '',
             ));
        $this->addColumn('dm_user', 'zipcode', 'string', '20', array(
             'notnull' => '',
             ));
        $this->addColumn('dm_user', 'city', 'string', '120', array(
             'notnull' => '',
             ));
        $this->addColumn('dm_user', 'description', 'clob', '', array(
             'extra' => 'markdown',
             ));
        $this->addColumn('dm_user', 'photo', 'integer', '8', array(
             ));
        $this->addColumn('dm_user', 'country', 'integer', '8', array(
             ));
        $this->addColumn('dm_user', 'datepayement', 'date', '25', array(
             'notnull' => '',
             ));
        $this->addColumn('dm_user', 'expertise', 'integer', '8', array(
             ));
        $this->addColumn('dm_user', 'sector', 'integer', '8', array(
             ));
        $this->addColumn('dm_user', 'usertype', 'integer', '8', array(
             ));
        $this->addColumn('dm_user', 'isconsultant', 'boolean', '25', array(
             'notnull' => '1',
             'default' => '0',
             ));
        $this->addColumn('dm_user', 'isrecruteur', 'boolean', '25', array(
             'notnull' => '1',
             'default' => '0',
             ));
        $this->addColumn('dm_user', 'issupplier', 'boolean', '25', array(
             'notnull' => '1',
             'default' => '0',
             ));
    }

    public function down()
    {
        $this->removeColumn('dm_user', 'title');
        $this->removeColumn('dm_user', 'firstname');
        $this->removeColumn('dm_user', 'cellphonenumber');
        $this->removeColumn('dm_user', 'fixephonenumber');
        $this->removeColumn('dm_user', 'faxnumber');
        $this->removeColumn('dm_user', 'society');
        $this->removeColumn('dm_user', 'adress');
        $this->removeColumn('dm_user', 'zipcode');
        $this->removeColumn('dm_user', 'city');
        $this->removeColumn('dm_user', 'description');
        $this->removeColumn('dm_user', 'photo');
        $this->removeColumn('dm_user', 'country');
        $this->removeColumn('dm_user', 'datepayement');
        $this->removeColumn('dm_user', 'expertise');
        $this->removeColumn('dm_user', 'sector');
        $this->removeColumn('dm_user', 'usertype');
        $this->removeColumn('dm_user', 'isconsultant');
        $this->removeColumn('dm_user', 'isrecruteur');
        $this->removeColumn('dm_user', 'issupplier');
    }
}