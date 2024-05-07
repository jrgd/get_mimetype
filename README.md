A simple php script to get the mime-type of a file I wanted to upload.

# get_mimetype – an amazing mime type getter from file – gltf 😘

As it stands, it seems the gltf mime-type went through a few revisions that got implemented across applications. But it appears it never really was cleared/enforced. Many pages on the internet are referencing various names: model/gltf+json, model/gltf-json, model/gltf-buffer, application/octet-stream, application/gltf-buffer, etc. 😱. I tried every term and combination I could find — no luck! 

So I resorted to ask chat-gpt for a way to check the file mimetype; I made it into a command line script.

- use it with an argument like ```php get_mimetype.php file/path/to/my/file/I/want/to/upload.gltf```
- or simply ```php get_mimetype.php``` and STDIN is going to give you a nudge.


Saves yourself the trouble of trying combos and reading rfc revisions and discussions leading to nowhere.
ps: the gltf I received, exported via Khronos in blender from an unknown version, currently, gives ‘application/json’. SO — uploading this file, requires WordPress to swallow a delicious $mime_types['gltf'] = 'application/json'; 
pps: I’m so looking forward to that panicked email telling me the website is not letting in any 3d models upload…