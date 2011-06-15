<table>
  <tbody>
    <tr>
      <th>Iduser:</th>
      <td><?php echo $user->getIduser() ?></td>
    </tr>
    <tr>
      <th>Idusertype:</th>
      <td><?php echo $user->getIdusertype() ?></td>
    </tr>
    <tr>
      <th>Titreuser:</th>
      <td><?php echo $user->getTitreuser() ?></td>
    </tr>
    <tr>
      <th>Nameuser:</th>
      <td><?php echo $user->getNameuser() ?></td>
    </tr>
    <tr>
      <th>Surnameuser:</th>
      <td><?php echo $user->getSurnameuser() ?></td>
    </tr>
    <tr>
      <th>Adressuser:</th>
      <td><?php echo $user->getAdressuser() ?></td>
    </tr>
    <tr>
      <th>Countryuser:</th>
      <td><?php echo $user->getCountryuser() ?></td>
    </tr>
    <tr>
      <th>Raisonsocialuser:</th>
      <td><?php echo $user->getRaisonsocialuser() ?></td>
    </tr>
    <tr>
      <th>Phonenumberuser:</th>
      <td><?php echo $user->getPhonenumberuser() ?></td>
    </tr>
    <tr>
      <th>Mailuser:</th>
      <td><?php echo $user->getMailuser() ?></td>
    </tr>
    <tr>
      <th>Pwduser:</th>
      <td><?php echo $user->getPwduser() ?></td>
    </tr>
    <tr>
      <th>Isactivateuser:</th>
      <td><?php echo $user->getIsactivateuser() ?></td>
    </tr>
    <tr>
      <th>Lastconnexionuser:</th>
      <td><?php echo $user->getLastconnexionuser() ?></td>
    </tr>
    <tr>
      <th>Zipcodeuser:</th>
      <td><?php echo $user->getZipcodeuser() ?></td>
    </tr>
    <tr>
      <th>Jobdescriptionuser:</th>
      <td><?php echo $user->getJobdescriptionuser() ?></td>
    </tr>
    <tr>
      <th>Corporationsize:</th>
      <td><?php echo $user->getCorporationsize() ?></td>
    </tr>
    <tr>
      <th>Isacceptemailnews:</th>
      <td><?php echo $user->getIsacceptemailnews() ?></td>
    </tr>
    <tr>
      <th>Apayersacotisationpourpublication:</th>
      <td><?php echo $user->getApayersacotisationpourpublication() ?></td>
    </tr>
    <tr>
      <th>Datevalidationpayement:</th>
      <td><?php echo $user->getDatevalidationpayement() ?></td>
    </tr>
    <tr>
      <th>Datefinvalidation:</th>
      <td><?php echo $user->getDatefinvalidation() ?></td>
    </tr>
    <tr>
      <th>Isconsultant:</th>
      <td><?php echo $user->getIsconsultant() ?></td>
    </tr>
    <tr>
      <th>Isrecruteur:</th>
      <td><?php echo $user->getIsrecruteur() ?></td>
    </tr>
    <tr>
      <th>Issupplier:</th>
      <td><?php echo $user->getIssupplier() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('User/edit?iduser='.$user->getIduser()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('User/index') ?>">List</a>
