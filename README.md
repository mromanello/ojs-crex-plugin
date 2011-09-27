Since implementing the whole plugin during the hackfest is a not realistically achievable I tried to break it down into smaller tasks:

* create a barebone plugin, packaged according to the OJS plugin format

* for the time being the enriched HTML will not be stored (but will need to be done in the long run) meaning that every time a journal paper is viewed the automatic extraction will be performed

* webservice hook: the communication between the plugin and the 3rd party NER web service has been almost implemented. I managed to have a PHP class which send a call to the web service and prints the JSON output.

* the automatic markup of the html may be tricky: it is needed tokenisation plus keep the position (start/end) for each token in the string. best to do this at a later stage. I will start with <p/> containing pure text

* templates to translate JSON into HTML
** what is being used in OJS for templating?
** with 1 to 1 correspondence between IOB entity and template: if entity=["LOC"] in the config file, then there shold be a LOC.tpl in the template directory and so on.

* display inline citations and a sort of summary on the right hand side

A first implementation is expected to:
* install properly with config file
* for each paragraph in the article:
** call webservice;
** run output through template and push it into HTML;
** display summary on right hand side

== Questions ==
* what's best recommended workflow with GIT when working on OJS
* any plugin file structure to get started?
* which template to change to display citation on the right
* what's the best way to develop-test OJS