# Making sure htaccess works

Test if mod_rewrite is working¶

To test if mod_rewrite is working correctly, do the following:

1. Rename it to `Panda-Network.php`, if needed.
2. Create a .htaccess file with the contents as below.

```
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^.*$ Panda-Network.php
</IfModule>
```

3. In your browser, open /test, with the correct domain name. So, it should look like https://localhost/Panda-Network.php

## Support

Panda-Network Discord [Discord-Server](https://discord.gg/z8ScRvf)

#### © 2021 Panda-Network
