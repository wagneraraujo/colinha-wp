/**
- Bons servidores
- NGIX
- http2
- Utilize GZIP Compression

 ## Plugins

 Perfmatters
 Disable All WordPress Updates
 Cache Enabler
 Block-Enabled Plugins
 */


//BD
Convert MyISAM to InnoDB with phpMyAdmin



 //wp-admin 
 define( 'WP_CACHE', true );
 define('WP_POST_REVISIONS', 10);
 define('DISABLE_WP_CRON', true);



//htacess
## EXPIRES HEADER CACHING ##
<IfModule mod_expires.c>
ExpiresActive On
ExpiresByType image/jpg "access 1 year"
ExpiresByType image/jpeg "access 1 year"
ExpiresByType image/gif "access 1 year"
ExpiresByType image/png "access 1 year"
ExpiresByType image/svg "access 1 year"
ExpiresByType text/css "access 1 month"
ExpiresByType application/pdf "access 1 month"
ExpiresByType application/javascript "access 1 month"
ExpiresByType application/x-javascript "access 1 month"
ExpiresByType application/x-shockwave-flash "access 1 month"
ExpiresByType image/x-icon "access 1 year"
ExpiresDefault "access 2 days"
</IfModule>
## EXPIRES HEADER CACHING ##

<IfModule mod_headers.c>
  <FilesMatch ".(js|css|xml|gz|html)$">
    Header append Vary: Accept-Encoding
  </FilesMatch>
</IfModule>