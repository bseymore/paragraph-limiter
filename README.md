paragraph-limiter
=================

The syntax is pretty simple. There are two parameters. 

Limit to control the number of paragraphs to display.

Start to control which paragraph one should start with

I wrote it mostly so I could easily insert an image or other content in between two paragraphs. So, the example code below outputs the first paragraph, then displays an image, and then outputs the rest of the paragraphs.

    {exp:paragraph_limiter limit="1"}{entry_description}{/exp:paragraph_limiter}
    <img src="{entry_image}" />
    {exp:paragraph_limiter start="2" }{entry_description}{/exp:paragraph_limiter}

You can also use the limit parameter in the second example, to show just the second and third paragraph.

Feel free to extend or modify this plugin how you see fit. It's in the public domain.
