<?php // Vars: $forumPostPager

echo $forumPostPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($forumPostPager as $forumPost)
{
  echo _open('li.element');

    echo _link($forumPost);

  echo _close('li');
}

echo _close('ul');

echo $forumPostPager->renderNavigationBottom();