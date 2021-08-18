# RDML Consortium Homepage
This page is maintained by the RDML consortium and is 
available on [rdml.org](https://rdml.org).

Dependencies for Update
-----------------------

Install the packages and get a copy of the repository.

`sudo apt install ruby ruby-dev make build-essential`

`sudo gem install bundler jekyll`

`git clone https://github.com/RDML-consortium/rdml-consortium.github.io.git rdml_homepage`

`cd rdml_homepage`

Modify the Homepage
-------------------

The homepage is build using [Jekyll](https://jekyllrb.com/). In short, Jekyll
builds static pages and is well integrated into [GitHub Pages](https://pages.github.com), 
which we use to host our site. Jekyll allows to assemble and view the page on 
a local machine.

`bundle exec jekyll serve`

The web page is served at [http://127.0.0.1:4000](http://127.0.0.1:4000) and
can be viewed with any browser.

Due to the tight integration of GitHub with GitHub Pages, a push of the modified
web page repository will automatically update the web page.

