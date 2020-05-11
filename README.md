# ci4_RESTful_API

The simplest possible Codeigniter4 RESTful API based on Representational State Transfer (REST) which is an architectural style for distributed applications, first described by Roy Fielding in his 2000 PhD dissertation, Architectural Styles and the Design of Network-based Software Architectures. 

### Highlights
1. This is the simplest form of RESTful API using CodeIGNITER4
2. Keep in mind that this prototype does not implement any validation or security consideration
3. Default Codeigniter4 CodeIgniter\RESTful\ResourceController handles return types and Model loading
4. Browser by default do not support JSON therefor the ResourceController will automatically send it as XML unless you specify otherwise
5. This API does not handle views. If interested in Pure API not RESTful then check out ci4 [UserGuide](https://codeigniter4.github.io/userguide/outgoing/api_responses.html)
6. This code not thoughtfully tested.

### Installation 

1. Have CI4 installed and ready 
2. Add a news table to your database

```SQL
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
```

3. Copy and paste NewModel.php to app/Models directory
4. Copy and Paste News.php to app/Controllers directory
5. Add  `$routes->resource('api/news', ['controller' =>'News']);` to Config/Route.php
6. You can access the API using yourDomain/api/news

### Notes
- Please if you have any comment or suggestion please do send me a message.
