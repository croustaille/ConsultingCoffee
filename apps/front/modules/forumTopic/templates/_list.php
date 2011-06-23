<?php // Vars: $forumtopicPager

echo $forumtopicPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($forumtopicPager as $forumtopic)
{
  echo _open('li.element');

    echo _link($forumtopic);

  echo _close('li');
}

echo _close('ul');

echo $forumtopicPager->renderNavigationBottom();