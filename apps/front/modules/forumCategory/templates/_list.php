<?php // Vars: $forumcategoryPager

echo $forumcategoryPager->renderNavigationTop();

echo _open('ul.elements');

foreach ($forumcategoryPager as $forumcategory)
{
  echo _open('li.element');

    echo _link($forumcategory);

  echo _close('li');
}

echo _close('ul');

echo $forumcategoryPager->renderNavigationBottom();