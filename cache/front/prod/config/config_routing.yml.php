<?php
// auto-generated by sfRoutingConfigHandler
// date: 2011/06/23 18:45:02
$this->routes['default'] = unserialize('C:7:"sfRoute":1604:{a:10:{i:0;a:8:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:1:"+";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":module";i:3;s:6:"module";}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:7:":action";i:3;s:6:"action";}i:6;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:7;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:1:"*";i:3;N;}}i:1;a:9:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"segment_separators";a:1:{i:0;s:1:"/";}}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:1:{i:0;s:1:"/";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:5:"(?:/)";s:22:"variable_content_regex";s:5:"[^/]+";}i:3;s:20:"/+/:module/:action/*";i:4;s:2:"/+";i:5;s:68:"#^/\\+/(?P<module>[^/]+)/(?P<action>[^/]+)(?:(?:/(?P<_star>.*))?)?$#x";i:6;a:2:{s:6:"module";s:7:":module";s:6:"action";s:7:":action";}i:7;a:0:{}i:8;a:2:{s:6:"module";s:5:"[^/]+";s:6:"action";s:5:"[^/]+";}i:9;s:0:"";}}');
$this->routes['toAdmin'] = unserialize('C:7:"sfRoute":1106:{a:10:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:5:"admin";i:3;N;}}i:1;a:9:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"segment_separators";a:1:{i:0;s:1:"/";}}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:1:{i:0;s:1:"/";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:5:"(?:/)";s:22:"variable_content_regex";s:5:"[^/]+";}i:3;s:6:"/admin";i:4;s:6:"/admin";i:5;s:11:"#^/admin$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:7:"dmFront";s:6:"action";s:7:"toAdmin";}i:8;a:0:{}i:9;s:0:"";}}');
$this->routes['signin'] = unserialize('C:7:"sfRoute":1290:{a:10:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"security";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:6:"signin";i:3;N;}}i:1;a:9:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"segment_separators";a:1:{i:0;s:1:"/";}}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:1:{i:0;s:1:"/";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:5:"(?:/)";s:22:"variable_content_regex";s:5:"[^/]+";}i:3;s:16:"/security/signin";i:4;s:16:"/security/signin";i:5;s:21:"#^/security/signin$#x";i:6;a:0:{}i:7;a:3:{s:6:"module";s:7:"dmFront";s:6:"action";s:4:"page";s:7:"dm_page";s:11:"main/signin";}i:8;a:0:{}i:9;s:0:"";}}');
$this->routes['signout'] = unserialize('C:7:"sfRoute":1263:{a:10:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:8:"security";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:7:"signout";i:3;N;}}i:1;a:9:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"segment_separators";a:1:{i:0;s:1:"/";}}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:1:{i:0;s:1:"/";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:5:"(?:/)";s:22:"variable_content_regex";s:5:"[^/]+";}i:3;s:17:"/security/signout";i:4;s:17:"/security/signout";i:5;s:22:"#^/security/signout$#x";i:6;a:0:{}i:7;a:2:{s:6:"module";s:6:"dmUser";s:6:"action";s:7:"signout";}i:8;a:0:{}i:9;s:0:"";}}');
$this->routes['dmPaginatedPage'] = unserialize('C:7:"sfRoute":1483:{a:10:{i:0;a:6:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:5:":slug";i:3;s:4:"slug";}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"page";i:3;N;}i:4;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:5;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:5:":page";i:3;s:4:"page";}}i:1;a:9:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"segment_separators";a:1:{i:0;s:1:"/";}}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:1:{i:0;s:1:"/";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:5:"(?:/)";s:22:"variable_content_regex";s:5:"[^/]+";}i:3;s:17:"/:slug/page/:page";i:4;s:0:"";i:5;s:37:"#^/(?P<slug>.+)/page/(?P<page>\\d+)$#x";i:6;a:2:{s:4:"slug";s:5:":slug";s:4:"page";s:5:":page";}i:7;a:2:{s:6:"module";s:7:"dmFront";s:6:"action";s:4:"page";}i:8;a:2:{s:4:"slug";s:2:".+";s:4:"page";s:3:"\\d+";}i:9;s:0:"";}}');
$this->routes['dmPaginatedHome'] = unserialize('C:7:"sfRoute":1313:{a:10:{i:0;a:4:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:4:"text";i:1;s:1:"/";i:2;s:4:"page";i:3;N;}i:2;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:3;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:5:":page";i:3;s:4:"page";}}i:1;a:9:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"segment_separators";a:1:{i:0;s:1:"/";}}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:1:{i:0;s:1:"/";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:5:"(?:/)";s:22:"variable_content_regex";s:5:"[^/]+";}i:3;s:11:"/page/:page";i:4;s:5:"/page";i:5;s:24:"#^/page/(?P<page>\\d+)$#x";i:6;a:1:{s:4:"page";s:5:":page";}i:7;a:3:{s:6:"module";s:7:"dmFront";s:6:"action";s:4:"page";s:4:"slug";s:0:"";}i:8;a:1:{s:4:"page";s:3:"\\d+";}i:9;s:0:"";}}');
$this->routes['dmPage'] = unserialize('C:7:"sfRoute":1160:{a:10:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:4:{i:0;s:8:"variable";i:1;s:1:"/";i:2;s:5:":slug";i:3;s:4:"slug";}}i:1;a:9:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"segment_separators";a:1:{i:0;s:1:"/";}}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:1:{i:0;s:1:"/";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:5:"(?:/)";s:22:"variable_content_regex";s:5:"[^/]+";}i:3;s:6:"/:slug";i:4;s:0:"";i:5;s:18:"#^/(?P<slug>.+)$#x";i:6;a:1:{s:4:"slug";s:5:":slug";}i:7;a:2:{s:6:"module";s:7:"dmFront";s:6:"action";s:4:"page";}i:8;a:1:{s:4:"slug";s:2:".+";}i:9;s:0:"";}}');
$this->routes['homepage'] = unserialize('C:7:"sfRoute":1100:{a:10:{i:0;a:2:{i:0;a:4:{i:0;s:9:"separator";i:1;s:0:"";i:2;s:1:"/";i:3;N;}i:1;a:3:{i:0;s:9:"separator";i:1;s:1:"/";i:2;s:1:"/";}}i:1;a:9:{s:18:"load_configuration";b:1;s:6:"suffix";s:0:"";s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"segment_separators";a:1:{i:0;s:1:"/";}}i:2;a:15:{s:6:"suffix";s:0:"";s:17:"variable_prefixes";a:1:{i:0;s:1:":";}s:18:"segment_separators";a:1:{i:0;s:1:"/";}s:14:"variable_regex";s:8:"[\\w\\d_]+";s:10:"text_regex";s:3:".+?";s:21:"generate_shortest_url";b:1;s:32:"extra_parameters_as_query_string";b:1;s:18:"load_configuration";b:1;s:14:"default_module";s:7:"default";s:14:"default_action";s:5:"index";s:5:"debug";s:0:"";s:7:"logging";s:0:"";s:21:"variable_prefix_regex";s:6:"(?:\\:)";s:24:"segment_separators_regex";s:5:"(?:/)";s:22:"variable_content_regex";s:5:"[^/]+";}i:3;s:1:"/";i:4;s:0:"";i:5;s:6:"#^/$#x";i:6;a:0:{}i:7;a:3:{s:6:"module";s:7:"dmFront";s:6:"action";s:4:"page";s:4:"slug";s:0:"";}i:8;a:0:{}i:9;s:1:"/";}}');
