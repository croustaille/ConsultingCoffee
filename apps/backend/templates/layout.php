<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
		<title>Consulting Coffee Admin Interface</title>
		<link rel="shortcut icon" href="/favicon.ico" />
		<?php use_stylesheet('admin.css') ?>
		<?php include_javascripts() ?>
		<?php include_stylesheets() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          <a href="<?php echo url_for('user') ?>">
            Consulting Coffee - Administration
          </a>
        </h1>
      </div>
       <div id="menu">
        <ul>
          <li>
            <?php echo link_to('City', 'city') ?>
          </li>
          <li>
            <?php echo link_to('Confidentiality level', 'confidentialitylevel') ?>
          </li>
		   <li>
            <?php echo link_to('Country', 'country') ?>
          </li>
          <li>
            <?php echo link_to('Cv', 'cv') ?>
          </li>
		   <li>
            <?php echo link_to('Document', 'document') ?>
          </li>
          <li>
            <?php echo link_to('Document type', 'documenttype') ?>
          </li>
		   <li>
            <?php echo link_to('Experience', 'experience') ?>
          </li>
          <li>
            <?php echo link_to('Expertise', 'expertise') ?>
          </li>
		   <li>
            <?php echo link_to('Ideas', 'ideas') ?>
          </li>
          <li>
            <?php echo link_to('Job', 'job') ?>
          </li>
		   <li>
            <?php echo link_to('Job category', 'jobcategory') ?>
          </li>
          <li>
            <?php echo link_to('Sector', 'sector') ?>
          </li>
		   <li>
            <?php echo link_to('Sub job category', 'subjobcategory') ?>
          </li>
          <li>
            <?php echo link_to('User', 'user') ?>
          </li>
		   <li>
            <?php echo link_to('User type', 'usertype') ?>
          </li>
        
        </ul>
      </div>
 
      <div id="content">
        <?php echo $sf_content ?>
      </div>
 
      <div id="footer">
   
        powered by Kele-Coonsulting
        
      </div>
    </div>
  </body>
</html>