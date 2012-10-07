=== Buy This Book ===
Contributors: raynfall
Donate link: http://www.raynfall.com
Tags: book, author, display, covers, amazon, kobo, ibooks, smashwords, lulu, barnes, noble
Requires at least: 3.3
Tested up to: 3.4
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Buy This Book allows authors to display their books on their website with links to six different possible buying options - Amazon, Kobo, Barnes & Noble, Smashwords, Lulu and iBooks - in a convenient slideout menu.

== Description ==

<p>Buy This Book is a WordPress plugin designed for authors. It was created to combat three problems:</p>
<ul>
<li>Many authors use things like the Amazon Affiliate widget to display their books, which is stripped out of webpages by adblockers. This results in their books never being seen by a significant chunk of users, as adblockers are the most popular plugins for Chrome and Firefox.</li>
<li>If authors want to just add their books and a link to Amazon, etc, they’re obliged to know some HTML and it’s something of a pain in the ass.</li>
<li>Neither option is ideal when books can be available on multiple websites.</li>
</ul>
<p>Buy This Book takes cover images and up to six websites, and displays them on the sidebar with a slideout menu.</p>
<p>It supports:</p>
<ul>
<li>Amazon</li>
<li>Kobo</li>
<li>Barnes &amp; Noble</li>
<li>Smashwords</li>
<li>Lulu</li>
<li>iBooks</li>
</ul>

Suggestions for new functionality welcome! Please contact me here:

<a href="https://www.facebook.com/RaynfallAgency">Facebook</a>
<a href="http://www.twitter.com/@rayntweets">Twitter</a>
<a href="http://www.raynfall.com">Website</a>

== Installation ==

1. Upload `buy-this-book.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to the Appearance -> Widgets screen. You should now see a new widget called Buy This Book. Click and drag it over to your chosen sidebar, and it’ll open up automatically.
4. Fill in the header. This is the widget title, and it’ll display above your books.
5. Paste the cover image link into the appropriate box. Here’s where the size of the image becomes important – if you want to add just one book to your sidebar, make the image as wide as the sidebar and only use the first column. If you’re only adding two and you want them to sit side by side, you have to make sure the images are narrow enough to fit comfortably. If you find that your images are below each other instead of being side by side, and you don’t want this to happen, then reduce their size.
5. Paste a link to your book’s page for each website into the appropriate boxes. Any you don’t use won’t show up.
6. Save the widget. You’re done! Check your site and click on the cover images to see the menu slide out from the bottom.

== Frequently asked questions ==

= My covers are jumping around when I click on them and the menu slides out! =

You're probably using cover images smaller than 100px wide. The menu is set in a box that's 105px across, because the icons are stacked into two rows of three, and having it slide out makes everything jump around as the images try to accomodate the extra space.

Add this line to your CSS:

.buybook .box {  width: XXpx !important; }

where XX = width of your image + 5.

This should fix it.

== Screenshots ==

1. Screenshot Buy This Book - Widget
2. Screenshot Buy This Book - Front end
