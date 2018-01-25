# ITC260-flickrAPI
Web application that creates a page of images filtered from flickr by tag

link to code in action:

http://anu.slorah.com/dev/ci/index.php/pics

Integrate Flickr API code in your CodeIgniter (CI) app: For this project you'll integrate the Flickr API into your existing CI app.  You'll need to create a controller, method and parameter that allows a parameter to be passed in on the querystring.  For example, if I have a controller in a file named Pics.php, create a method named view() and allow a parameter that consists of the word cows, I could see pictures retrieved via the Flickr API that feature the "cows" tag by the following url:

http://example.com/ci/index.php/pics/view/cows

M, V and C required: Your finished app must utilize all three aspects of MVC, meaning you need to build a model, controller and at least one view!  You'll be submitting your repo where you store the code, so I'll see if you get this working.

Visually Integrated: Now that we have a theme working, please do a little work on the view and integrate the pictures delivered in an appealing way.  Please at least add the "title" of the picture for example, below each picture.

Linked to your CI application, at least 3 tags: Your Flickr API pages must be fully linkable via the links in the top of your CI app.  The link would bear the text for example, Pics.  Once clicked, it would the user to a page where they could select from at least 3 tags, for example:

mariners
seahawks
sounders
From there, the user would be taken (via a querystring linked page) to a page that shows 25 pics of the same tag.  The page showing the images must be formatted in a somewhat professional manner and include at least the title as provided by the API to be visible.
