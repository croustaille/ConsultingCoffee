<td class="sf_admin_text sf_admin_list_td_iduser">
  <?php echo link_to($user->getIduser(), 'user_edit', $user) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_idusertype">
  <?php echo $user->getIdusertype() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_titreuser">
  <?php echo $user->getTitreuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nameuser">
  <?php echo $user->getNameuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_surnameuser">
  <?php echo $user->getSurnameuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_adressuser">
  <?php echo $user->getAdressuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_countryuser">
  <?php echo $user->getCountryuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_raisonsocialuser">
  <?php echo $user->getRaisonsocialuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_phonenumberuser">
  <?php echo $user->getPhonenumberuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_mailuser">
  <?php echo $user->getMailuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_pwduser">
  <?php echo $user->getPwduser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_isactivateuser">
  <?php echo $user->getIsactivateuser() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_lastconnexionuser">
  <?php echo false !== strtotime($user->getLastconnexionuser()) ? format_date($user->getLastconnexionuser(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_zipcodeuser">
  <?php echo $user->getZipcodeuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_jobdescriptionuser">
  <?php echo $user->getJobdescriptionuser() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_corporationsize">
  <?php echo $user->getCorporationsize() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_isacceptemailnews">
  <?php echo $user->getIsacceptemailnews() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_apayersacotisationpourpublication">
  <?php echo $user->getApayersacotisationpourpublication() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_datevalidationpayement">
  <?php echo false !== strtotime($user->getDatevalidationpayement()) ? format_date($user->getDatevalidationpayement(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_datefinvalidation">
  <?php echo false !== strtotime($user->getDatefinvalidation()) ? format_date($user->getDatefinvalidation(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_text sf_admin_list_td_isconsultant">
  <?php echo $user->getIsconsultant() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_isrecruteur">
  <?php echo $user->getIsrecruteur() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_issupplier">
  <?php echo $user->getIssupplier() ?>
</td>
