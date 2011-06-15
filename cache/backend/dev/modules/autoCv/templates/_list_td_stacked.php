<td colspan="7">
  <?php echo __('%%id_cv%% - %%iduser%% - %%titrecv%% - %%descriptioncv%% - %%datedisponibilitecv%% - %%tarifcv%% - %%estvisiblecv%%', array('%%id_cv%%' => link_to($cv->getIdCv(), 'cv_edit', $cv), '%%iduser%%' => $cv->getIduser(), '%%titrecv%%' => $cv->getTitrecv(), '%%descriptioncv%%' => $cv->getDescriptioncv(), '%%datedisponibilitecv%%' => false !== strtotime($cv->getDatedisponibilitecv()) ? format_date($cv->getDatedisponibilitecv(), "f") : '&nbsp;', '%%tarifcv%%' => $cv->getTarifcv(), '%%estvisiblecv%%' => $cv->getEstvisiblecv()), 'messages') ?>
</td>
