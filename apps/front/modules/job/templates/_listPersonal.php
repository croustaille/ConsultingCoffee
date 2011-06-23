<?php // Vars: $jobPager

$userid = sfContext::getInstance()->getUser()->getGuardUser()->getId();


echo $jobPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($jobPager as $job)
{
  echo _open('li.element');
  
   echo _tag('h2.t_medium', _link($job));  

   echo markdown(substr($job->description,0,220).'...', '.description');  

  echo _close('li');
}

echo _close('ul');

echo $jobPager->renderNavigationBottom();