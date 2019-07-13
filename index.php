<head>
  <link href="https://aidan-brown.blogspot.com/favicon.ico" rel="icon" type="image/x-icon">
    <title>LAMP Proof of Concept</title>
  </head>
  <body>
    

<style type="text/css">
body {background-color: #fff; color: #222; font-family: sans-serif;}
pre {margin: 0; font-family: monospace;}
a:link {color: #009; text-decoration: none; background-color: #fff;}
a:hover {text-decoration: underline;}
table {border-collapse: collapse; border: 0; width: 934px; box-shadow: 1px 2px 3px #ccc;}
.center {text-align: center;}
.center table {margin: 1em auto; text-align: left;}
.center th {text-align: center !important;}
td, th {border: 1px solid #666; font-size: 75%; vertical-align: baseline; padding: 4px 5px;}
h1 {font-size: 150%;}
h2 {font-size: 125%;}
.p {text-align: left;}
.e {background-color: #ccf; width: 300px; font-weight: bold;}
.h {background-color: #99c; font-weight: bold;}
.v {background-color: #ddd; max-width: 300px; overflow-x: auto; word-wrap: break-word;}
.v i {color: #999;}
img {float: right; border: 0;}
hr {width: 934px; background-color: #ccc; border: 0; height: 1px;}
</style>
<title>phpinfo()</title><meta name="ROBOTS" content="NOINDEX,NOFOLLOW,NOARCHIVE">
<div class="center">
<table>
<tbody><tr class="h"><td>
<a href="http://www.php.net/"><img border="0" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHkAAABACAYAAAA+j9gsAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAD4BJREFUeNrsnXtwXFUdx8/dBGihmE21QCrQDY6oZZykon/gY5qizjgM2KQMfzFAOioOA5KEh+j4R9oZH7zT6MAMKrNphZFSQreKHRgZmspLHSCJ2Co6tBtJk7Zps7tJs5t95F5/33PvWU4293F29ybdlPzaM3df2XPv+Zzf4/zOuWc1tkjl+T0HQ3SQC6SBSlD6WKN4rusGm9F1ps/o5mPriOf8dd0YoNfi0nt4ntB1PT4zYwzQkf3kR9/sW4xtpS0CmE0SyPUFUJXFMIxZcM0jAZ4xrKMudQT7963HBF0n6EaUjkP0vI9K9OEHWqJLkNW1s8mC2WgVTwGAqWTafJzTWTKZmQuZ/k1MpAi2+eys6mpWfVaAPzcILu8EVKoCAaYFtPxrAXo8qyNwzZc7gSgzgN9Hx0Ecn3j8xr4lyHOhNrlpaJIgptM5DjCdzrJ0Jmce6bWFkOpqs0MErA4gXIBuAmY53gFmOPCcdaTXCbq+n16PPLXjewMfGcgEttECeouTpk5MplhyKsPBTiXNYyULtwIW7Cx1vlwuJyDLR9L0mQiVPb27fhA54yBbGttMpc1OWwF1cmKaH2FSF7vAjGezOZZJZ9j0dIZlMhnuRiToMO0c+N4X7oksasgEt9XS2KZCHzoem2Ixq5zpAuDTqTR14FMslZyepeEI4Ogj26n0vLj33uiigExgMWRpt+CGCsEePZqoePM738BPTaJzT7CpU0nu1yXpAXCC3VeRkCW4bfJYFZo6dmJyQTW2tvZc1nb719iyZWc5fmZ6Osu6H3uVzit52oBnMll2YizGxk8muFZLAshb/YKtzQdcaO3Y2CQ7eiy+YNGvLN+4+nJetm3bxhKJxJz316xZw1pbW9kLew+w1944XBEaPj6eYCeOx1gqNe07bK1MwIDbKcOFOR49GuePT5fcfOMX2drPXcQ0zf7y2tvbWVdXF/v1k2+yQ4dPVpQ5P0Um/NjoCX6UBMFZR6k+u7qMYVBYDIEqBW7eXAfPZX19zp2/oaGBHysNMGTFinPZik9fWggbI5Omb13zUDeB3lLsdwaK/YPeyAFU0i8Aw9/2Dwyx4SPjFQEYUlf3MTYw4Jx7CIVCbHR0oqIDNMD+FMG+ZE0dO/tsHlvAWnYS6H4qjfMC+Zld/wg92/tuv2WeeYT87j+H2aFDxysGLuSy+o/z49DQkONnmpqa2MjRyoYsZOXKGnb5Z+vZqlUrxUsAvI9At/oK+elnBpoNw+Dai9TekSMxDrgSh0KrSYshTprc2NhoRf1JtlikqirAVl98AddsSavDBDrsC+QdT7/TSoB344tzOZ39+70RbporVerqasyw1MEnC8iV6I9VTDi0uqbmfPFSq2W+gyUHXuEdb3WR5rab5jnD3i/BNMN8ChNaqsTiKa55KmBWX+Tuj0XQdQVF307nhTH0CPls+O0UPbaT5TQG/8qX68u6LpV67LQ6dNknaYgaYyPDx2TzvYGCsnhRkH8b/rsF2GDj1MCInkvxvRjOuCUlipWD/zrKx7ZOwBF0vfSSM2ShyaqAAOC1Nw+zt9/5YNbrN1zfwIdpfgnqebv/A6pnWAn4qlW1HPgHQ6OeoG3N9RO/+StMdDtmV2LxJPfBpQCGfwTgrVu38jFrKaW2tpZt2LCBdXR0sEgkwhv21u9cxQsyW3ZB1+DgoOM54btU6tu8eTPr6elhy5fr7IZNDey+e76e9/fCLcAllHpdKKinpaUlX8+111xB9VzNrYxqUAY/XVVVJYMOekLu2fFGM8VWYQRYiYkU9bD4vPlHFYnH4/zvkb1CgwACHgMoUpdyw3sFXcXUh4YHaNSHDqaxdL5jwVTXBpeXVY9oF3RcUQ+O09NT7Cayfld+4RJlP42gTIq8w66Qf/X4a6FTSSMMDcaE/NhYecMM+MdyG90OAhodWoAGkTUaSZByO5WdiA4GqwStrrM6k5vFKEXQserr63l7oR5V0NBojKctaSZtbneErOtGmFxwkGewjk0UzpCUlJSIRqMcjN8CkHLDqyRByq0PEGBBhDmdj7rQVujAaLfrrlk7xyW5gUaxpEtOmOQDr0e799NYmDVBi0+OT7FcbsaXxEQk8qprEBQMBm0vVKUBRcNjskFE8W71lSt79uzhda1d6w4ZGTUUp3NWAQ3TvW/fPvbVq+rZH/ceULOcF1/I06CY3QJohCCzNJnYdgEwwvpUKuNbUsLNpO3evZtfSGHp7+/nS2pw3LLFPVWLoA5yHQUtXvXFYjH+vU4F5yOibzsRUL38MTqC3XWh8GCWziMcDjt2BNEZUIfoUOpJkwvziT3S5ua8Jj/4yD5E0yERbPkhKv4RF4mhkN1wCMHN2rWfYZ2dnWz9+vXchNkJzBoaQ8Bxqg91wWo41YdO2dzczD+3bt06Rw0rBG4nOF8oi9M0Jsw9OgLqQ124BifLgeuHyVbN0NXUrODBmDWxgRR0pNrUYqMNgDOZGZbNzvgCuc4j0kX+GPJ2//CcMagQmKkbrm/knwVEp++SIXulM1+nhj9AY207QRDnpsnye24WA59DkuPlV/5j+z5eB2hE0W1tbTyQdNJmDpksRzFp2E9csFJAboRvDvz8gZdJgw2ek55KZphfAv+Inu8UdKnmkEUHQK93EjEZ4Rbkifq8JiactEpYAy9Nli2Gm6CjIZPn1qlKFWizleOG3BIwdKNZ+KRMxr9VHKvr1NKLXo2BhlAVFRPq1qlWW6MBr3NWyY2rTGXO5ySJlN9uDuiGsV7XTVPtl8CHYGizf/9+V5Om0hAwVV4ahuU8qia03HP26kyqFkMOTudDzjs/P/QKBUiBYa5ZNucfZJUkCG/0IhpCxYyqBF3lnLOII8q1GKqdStQ3rTh5MStwXX5O/nE1metGQzPHUH6JatA1OppQ8u1eUbpX44tO4GY5vM5Z9sduFgOfG1GwUOK6VFzaSAmrWCSfzGCuuT/O+bi6QwRdTtqXN2keJ4/ejgkJ5HedRARkbkGe6ARulgMWQ+Wc3cDAWohhoZdcue7ifJ7crfP6Me8dELd0Mv8U2begC2k9SHd3t+NnNm7cqKwRbiYUkykqvlZlmOYVLIq5bHRep46JzotOc9BhuFc0ZHGLph+CJIaXr1FZSIfxsdBiN1+LpALEK2By61Aqs0rwtV7DNBU3BMCYixYTLU6C8bM5hBwum0k1mesBpmPtlj+qXFenFsAgCVLon9DYeIxUnmh05HCdBIkCVRP6ussiepVZJZXIutCHwt2I0YGY2Kiz3AIyeG5aLNooVULQBbHy1/nAK2oEtEanheil+GO3aFg0FnwSilNC4q6OrXzywc0XCy1WMaFu/tgrCBLRuWpHuP+n1zqmRXFN0GAnwKgHeW1E1C/86UDJHFKptATZMPZTafbLXHtN3OPixKRC4ev4GwB2Gy6JxhQNEYul+KoKp79RMaGqKzy9ovzt27c7pidVZtYAGJMYOP7u6bdK1mLI1GQ+/ogSZBahwKuLO2jSZt0odw65xrUhAMNrZskLsGiIXz72F3bTjV+ixvtbWcMQr3NWCbog5VyXAIy63PLrqpJITIqHkcD9P7suSiYbG53wvTLKDbr8WBbjZqIF4F3PD3ItRn1eQd5CBF3lCM5RAIYfVp0/dgZ8SvbJ2/l8MmlvNw+8qJTjm+drWQwaAXO9KMuWncc1GBMXKkGeV/pU5ZxFIsTvzovOCu3HvDnOE7NTu3rLr+PE8fy6+IEX9947YM4n/+LbPT/88R8QqoYAuVSDrZLFKcYso2AcLBIeGDPu6h3M+yqvIE/4Y6w4LdUfi+jcr86L75KvC9+PcbVfd1hCi6U7Innwk1/+Q5rcoetsdyBg3s9aCmivBsNFifGfG9zCJUFiztmpEXAbqhMgr6SLWBPu9R1enRfm1ktrC6cVYWH+/Mqg43x6sYK1edaCex7vkRZHZkF+6P6NkXvvi/TpLNBUaqTtdcsoLtIrVTcem2EHDh7m2uq0ikMINBvafOmazzt+BkGMW9CF70DndPsOaJqb38Y1oXjdCYHOiqwbPofrKid6thMAlnxxPtMy6w4K0ubNhq73U5wd5PtVleCTd+50D2CEafLloqixyv0ufMcOGq64CVaMYN2119gfAdPpuscKOxWgCMDwxfm0pvzBhx9siRLoFt3ca7Ikf+x2yygaYzHdTSi7IT9y8fMJ2Lpdhg+ZCPA2+f05d1A88mBLHzQaoA1dL6ohVLJGi+1uQj8XQMyHIMgaGT6eDxuozMkD294LRaB7CPI27DLHQSskSFRvGa30O/zndF4fF0DMhwa//9//iZ2DcILqN7xBHn1oUweNn7eJ3WO9QHvdMlrMsphKEj8XQPgpuHVVMtGOgF0hC9CGTqbb2kHOzXx73aKiuiymEv2x22ICMYYeWSALBQ7RQ0fkoZIr4DnRtS3ohzf1dNzTG9d0PcwMLahZO8UyKTMm38wteratSVtkplq4oWj0PcfrEinPhYg14H+hvdIwCVs1bvb6O+UBMYFGl90d0LRGLRDgoHEUwYnXDniQStocTVUwfPLaKQGA/RoWOmkvtnsaG8unK+PWMKlH5e+Lznp03N27RdO0TkxmYNZKszYBlyfI3RpjsQkmMOo8ls4Wsx1EKcEVAEvayyNoeRzsO2RI+93PNRLesGYtNpBhL4l/prlgZz5ob0mbtZVFhWC301d0EuQgAHPgS7D9hssTHKyMbRfLptF213NBDRuoaqxNA2yh2VUBDnxJ1M1yRW6gOgt2x64gqXK7ht1yOWyW1+wl7bYXvhUygQXgit4KuVDuBGzSbA2bmmtayNzpRgJOGu7XosHFChZzvrGTiUKt5UMiVsmbmtsCb3+2lZmwm3hFNsA/CiYdKyfhYx3Aws8urp8nsJM72naGCG8zYwZMecjk/WHVVRbsMwU6tBVQsWJS2sNDlrgVTO0RE/vzKQtuN2+/85k5PxlUaL75D3BZwKss+JUqSFRAO/F7Eqlkmj+2gbrgYE8rZFluu+P3pOGsyWCG/Y9/GR8exC+vYfc5flxgzRdDGsDEz/8AJsxwQcBUKPCtmKOMFJO8OKMgF8r3b3sKkAm69TN+2OZCAm5ID/g9XPypwX29ufWgudq0urrKes/8nPkxgy1bdg6z/or/SFc2mzV/xs+6HwySTmdYJp2dpaWKEregYrVfn9/B0xkD2U6+e+sOaHqImTfLrycUOIZM1hJwC3oemPXbi/y5PnsrJ136bUa8pxu69BklmANWwDRkgR1wmwVaglyi3Nz6JLQ+ZG5NxQsgNdAhmIfJN7wxgoWg9fxzPQ+c/g9YAIXgeUKCyipJO4uR/wswAOIwB/5IgxvbAAAAAElFTkSuQmCC" alt="PHP logo"></a><h1 class="p">PHP Version 7.0.33-0ubuntu0.16.04.5</h1>
</td></tr>
</tbody></table>
<table>
<tbody><tr><td class="e">System </td><td class="v">Linux 22864f79614c 4.4.0-1085-aws #96-Ubuntu SMP Tue Jun 11 09:08:32 UTC 2019 x86_64 </td></tr>
<tr><td class="e">Server API </td><td class="v">Apache 2.0 Handler </td></tr>
<tr><td class="e">Virtual Directory Support </td><td class="v">disabled </td></tr>
<tr><td class="e">Configuration File (php.ini) Path </td><td class="v">/etc/php/7.0/apache2 </td></tr>
<tr><td class="e">Loaded Configuration File </td><td class="v">/app/php.ini </td></tr>
<tr><td class="e">Scan this dir for additional .ini files </td><td class="v">/etc/php/7.0/apache2/conf.d </td></tr>
<tr><td class="e">Additional .ini files parsed </td><td class="v">/etc/php/7.0/apache2/conf.d/10-mysqlnd.ini,
/etc/php/7.0/apache2/conf.d/10-opcache.ini,
/etc/php/7.0/apache2/conf.d/10-pdo.ini,
/etc/php/7.0/apache2/conf.d/15-xml.ini,
/etc/php/7.0/apache2/conf.d/20-calendar.ini,
/etc/php/7.0/apache2/conf.d/20-ctype.ini,
/etc/php/7.0/apache2/conf.d/20-curl.ini,
/etc/php/7.0/apache2/conf.d/20-dom.ini,
/etc/php/7.0/apache2/conf.d/20-exif.ini,
/etc/php/7.0/apache2/conf.d/20-fileinfo.ini,
/etc/php/7.0/apache2/conf.d/20-ftp.ini,
/etc/php/7.0/apache2/conf.d/20-gd.ini,
/etc/php/7.0/apache2/conf.d/20-gettext.ini,
/etc/php/7.0/apache2/conf.d/20-iconv.ini,
/etc/php/7.0/apache2/conf.d/20-json.ini,
/etc/php/7.0/apache2/conf.d/20-mbstring.ini,
/etc/php/7.0/apache2/conf.d/20-mcrypt.ini,
/etc/php/7.0/apache2/conf.d/20-mysqli.ini,
/etc/php/7.0/apache2/conf.d/20-pdo_mysql.ini,
/etc/php/7.0/apache2/conf.d/20-pdo_sqlite.ini,
/etc/php/7.0/apache2/conf.d/20-phar.ini,
/etc/php/7.0/apache2/conf.d/20-posix.ini,
/etc/php/7.0/apache2/conf.d/20-readline.ini,
/etc/php/7.0/apache2/conf.d/20-shmop.ini,
/etc/php/7.0/apache2/conf.d/20-simplexml.ini,
/etc/php/7.0/apache2/conf.d/20-sockets.ini,
/etc/php/7.0/apache2/conf.d/20-sqlite3.ini,
/etc/php/7.0/apache2/conf.d/20-sysvmsg.ini,
/etc/php/7.0/apache2/conf.d/20-sysvsem.ini,
/etc/php/7.0/apache2/conf.d/20-sysvshm.ini,
/etc/php/7.0/apache2/conf.d/20-tokenizer.ini,
/etc/php/7.0/apache2/conf.d/20-wddx.ini,
/etc/php/7.0/apache2/conf.d/20-xmlreader.ini,
/etc/php/7.0/apache2/conf.d/20-xmlwriter.ini,
/etc/php/7.0/apache2/conf.d/20-xsl.ini,
/etc/php/7.0/apache2/conf.d/20-zip.ini
 </td></tr>
<tr><td class="e">PHP API </td><td class="v">20151012 </td></tr>
<tr><td class="e">PHP Extension </td><td class="v">20151012 </td></tr>
<tr><td class="e">Zend Extension </td><td class="v">320151012 </td></tr>
<tr><td class="e">Zend Extension Build </td><td class="v">API320151012,NTS </td></tr>
<tr><td class="e">PHP Extension Build </td><td class="v">API20151012,NTS </td></tr>
<tr><td class="e">Debug Build </td><td class="v">no </td></tr>
<tr><td class="e">Thread Safety </td><td class="v">disabled </td></tr>
<tr><td class="e">Zend Signal Handling </td><td class="v">disabled </td></tr>
<tr><td class="e">Zend Memory Manager </td><td class="v">enabled </td></tr>
<tr><td class="e">Zend Multibyte Support </td><td class="v">provided by mbstring </td></tr>
<tr><td class="e">IPv6 Support </td><td class="v">enabled </td></tr>
<tr><td class="e">DTrace Support </td><td class="v">available, disabled </td></tr>
<tr><td class="e">Registered PHP Streams</td><td class="v">https, ftps, compress.zlib, php, file, glob, data, http, ftp, phar, zip</td></tr>
<tr><td class="e">Registered Stream Socket Transports</td><td class="v">tcp, udp, unix, udg, ssl, tls, tlsv1.0, tlsv1.1, tlsv1.2</td></tr>
<tr><td class="e">Registered Stream Filters</td><td class="v">zlib.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk, convert.iconv.*, mcrypt.*, mdecrypt.*</td></tr>
</tbody></table>
<table>
<tbody><tr class="v"><td>
<a href="http://www.zend.com/"><img border="0" src="data:image/png;base64,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" alt="Zend logo"></a>
This program makes use of the Zend Scripting Language Engine:<br>Zend&nbsp;Engine&nbsp;v3.0.0,&nbsp;Copyright&nbsp;(c)&nbsp;1998-2017&nbsp;Zend&nbsp;Technologies<br>&nbsp;&nbsp;&nbsp;&nbsp;with&nbsp;Zend&nbsp;OPcache&nbsp;v7.0.33-0ubuntu0.16.04.5,&nbsp;Copyright&nbsp;(c)&nbsp;1999-2017,&nbsp;by&nbsp;Zend&nbsp;Technologies<br></td></tr>
</tbody></table>
<hr>
<h1>Configuration</h1>
<h2><a name="module_apache2handler">apache2handler</a></h2>
<table>
<tbody><tr><td class="e">Apache Version </td><td class="v">Apache/2.4.18 (Ubuntu) </td></tr>
<tr><td class="e">Apache API Version </td><td class="v">20120211 </td></tr>
<tr><td class="e">Server Administrator </td><td class="v">webmaster@localhost </td></tr>
<tr><td class="e">Hostname:Port </td><td class="v">heavy-beginner.glitch.me:3000 </td></tr>
<tr><td class="e">User/Group </td><td class="v">app(1000)/1000 </td></tr>
<tr><td class="e">Max Requests </td><td class="v">Per Child: 0 - Keep Alive: on - Max Per Connection: 100 </td></tr>
<tr><td class="e">Timeouts </td><td class="v">Connection: 300 - Keep-Alive: 5 </td></tr>
<tr><td class="e">Virtual Server </td><td class="v">Yes </td></tr>
<tr><td class="e">Server Root </td><td class="v">/etc/apache2 </td></tr>
<tr><td class="e">Loaded Modules </td><td class="v">core mod_so mod_watchdog http_core mod_log_config mod_logio mod_version mod_unixd mod_access_compat mod_alias mod_auth_basic mod_authn_core mod_authn_file mod_authz_core mod_authz_host mod_authz_user mod_autoindex mod_deflate mod_dir mod_env mod_filter mod_mime prefork mod_negotiation mod_php7 mod_rewrite mod_setenvif mod_status </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">engine</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">last_modified</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">xbithack</td><td class="v">0</td><td class="v">0</td></tr>
</tbody></table>
<h2>Apache Environment</h2>
<table>
<tbody><tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">HTTP_CONNECTION </td><td class="v">close </td></tr>
<tr><td class="e">HTTP_X_FORWARDED_FOR </td><td class="v">50.24.30.47,::ffff:10.10.11.14,::ffff:10.10.10.252 </td></tr>
<tr><td class="e">HTTP_X_FORWARDED_PROTO </td><td class="v">https,http,http </td></tr>
<tr><td class="e">HTTP_X_FORWARDED_PORT </td><td class="v">443,80,80 </td></tr>
<tr><td class="e">HTTP_HOST </td><td class="v">heavy-beginner.glitch.me </td></tr>
<tr><td class="e">HTTP_X_AMZN_TRACE_ID </td><td class="v">Root=1-5d2a21a2-34228ecc58efe04f1222718b </td></tr>
<tr><td class="e">HTTP_ACCEPT </td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8 </td></tr>
<tr><td class="e">HTTP_USER_AGENT </td><td class="v">Mozilla/5.0 (iPad; CPU OS 12_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Mobile/15E148 Safari/604.1 </td></tr>
<tr><td class="e">HTTP_ACCEPT_LANGUAGE </td><td class="v">en-us </td></tr>
<tr><td class="e">HTTP_ACCEPT_ENCODING </td><td class="v">br, gzip, deflate </td></tr>
<tr><td class="e">HTTP_COOKIE </td><td class="v">utag_main=v_id:016bec86d1f00020f3eac1386b7c00082002307a00720$_sn:1$_ss:0$_st:1563043193774$ses_id:1563041386995%3Bexp-session$_pn:1%3Bexp-session$_prevpage:https%3A%2F%2Finteresting-hose.glitch.me%3Bexp-1563044993342; xdibx=N4Ig-mBGAeDGCuAnRIBcoAOGAuBnNAjAKwBsAzAAwAsBZAHAJwDsNANCBgG6wB22aAJirtc-VMXLVajFgXZdcvfuPaIkAGzQgAFtmwZcqAPRGA5uoCW2WNoB0sAPYBbIwFMAJlaMh26jVu9fPEJSAjoyIgjyOiIAX3YIGAxEV040UHcAQwBPMQBtCTChAhJSogZWCQEJJgIGYgFK0koaegY6AioAXXjwKGhU1z4xYF7EuAt3LQYSVzrYKncAWldwsiWqAXdYJYYAM2IlzMyKMgYGWCIqEkPCumKSIjomBhBYoA__; _fbp=fb.1.1561824165458.344315892; AMP_TOKEN=%24NOT_FOUND; _ga=GA1.2.1984539256.1560713312; _gid=GA1.2.472118973.1563041383; _ym_isad=2; _ym_d=<a href="tel:1563037791">1563037791</a>; _ym_uid=1563037791401540159; _sctr=1|1562389200000; cto_clc=1; fs_mixpanel=6620611623714816:<a href="tel:6429405517381632">6429405517381632</a>; mp_45c93e9160d1559cc951522c80f523f9_mixpanel=%7B%22distinct_id%22%3A%20%2216bc9132fe11e4-0a818597796d4c-10073e7b-c0000-16bc9132fe2e%22%2C%22%24device_id%22%3A%20%2216bc9132fe11e4-0a818597796d4c-10073e7b-c0000-16bc9132fe2e%22%2C%22%24initial_referrer%22%3A%20%22%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%2C%22FullStory%20Session%22%3A%20%22https%3A%2F%2Fapp.fullstory.com%2Fui%2F1F40C%2Fsession%2F6620611623714816%253A6429405517381632%22%2C%22__mps%22%3A%20%7B%22%24os%22%3A%20%22iOS%22%2C%22%24browser%22%3A%20%22Mobile%20Safari%22%2C%22%24browser_version%22%3A%2012.1%2C%22%24initial_referrer%22%3A%20%22%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%2C%22Most%20Recent%20FullStory%20Session%22%3A%20%22https%3A%2F%2Fapp.fullstory.com%2Fui%2F1F40C%2Fsession%2F6620611623714816%253A6429405517381632%22%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%7D; _gcl_au=1.1.621346183.1562446608; fs_uid=rs.fullstory.com`1F40C`6620611623714816:<a href="tel:6429405517381632">6429405517381632</a>; cto_lwid=d90447ca-46a8-49af-80f0-bb265c30ae1a; optimizelyEndUserId=oeu1562446603278r0.15479903484512691 </td></tr>
<tr><td class="e">HTTP_X_REQUEST_ID </td><td class="v">7655ccf1a49ed99f </td></tr>
<tr><td class="e">HTTP_X_GLITCH_ROUTING </td><td class="v">21ab5761-9dd2-4e01-9621-f9bf2317b5f5:1085 </td></tr>
<tr><td class="e">HTTP_X_FORWARDED_HOST </td><td class="v">heavy-beginner.glitch.me </td></tr>
<tr><td class="e">PATH </td><td class="v">/app/bin:/app/.local/bin:/app/node_modules/.bin:/opt/rust/cargo/bin:/usr/local/go/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin </td></tr>
<tr><td class="e">SERVER_SIGNATURE </td><td class="v">&lt;address&gt;Apache/2.4.18 (Ubuntu) Server at heavy-beginner.glitch.me Port 3000&lt;/address&gt;
 </td></tr>
<tr><td class="e">SERVER_SOFTWARE </td><td class="v">Apache/2.4.18 (Ubuntu) </td></tr>
<tr><td class="e">SERVER_NAME </td><td class="v">heavy-beginner.glitch.me </td></tr>
<tr><td class="e">SERVER_ADDR </td><td class="v">127.0.0.1 </td></tr>
<tr><td class="e">SERVER_PORT </td><td class="v">3000 </td></tr>
<tr><td class="e">REMOTE_ADDR </td><td class="v">127.0.0.1 </td></tr>
<tr><td class="e">DOCUMENT_ROOT </td><td class="v">/app </td></tr>
<tr><td class="e">REQUEST_SCHEME </td><td class="v">http </td></tr>
<tr><td class="e">CONTEXT_PREFIX </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">CONTEXT_DOCUMENT_ROOT </td><td class="v">/app </td></tr>
<tr><td class="e">SERVER_ADMIN </td><td class="v">webmaster@localhost </td></tr>
<tr><td class="e">SCRIPT_FILENAME </td><td class="v">/app/index.php </td></tr>
<tr><td class="e">REMOTE_PORT </td><td class="v">53512 </td></tr>
<tr><td class="e">GATEWAY_INTERFACE </td><td class="v">CGI/1.1 </td></tr>
<tr><td class="e">SERVER_PROTOCOL </td><td class="v">HTTP/1.1 </td></tr>
<tr><td class="e">REQUEST_METHOD </td><td class="v">GET </td></tr>
<tr><td class="e">QUERY_STRING </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">REQUEST_URI </td><td class="v">/ </td></tr>
<tr><td class="e">SCRIPT_NAME </td><td class="v">/index.php </td></tr>
</tbody></table>
<h2>HTTP Headers Information</h2>
<table>
<tbody><tr class="h"><th colspan="2">HTTP Request Headers</th></tr>
<tr><td class="e">HTTP Request </td><td class="v">GET / HTTP/1.1 </td></tr>
<tr><td class="e">connection </td><td class="v">close </td></tr>
<tr><td class="e">x-forwarded-for </td><td class="v">50.24.30.47,::ffff:10.10.11.14,::ffff:10.10.10.252 </td></tr>
<tr><td class="e">x-forwarded-proto </td><td class="v">https,http,http </td></tr>
<tr><td class="e">x-forwarded-port </td><td class="v">443,80,80 </td></tr>
<tr><td class="e">host </td><td class="v">heavy-beginner.glitch.me </td></tr>
<tr><td class="e">x-amzn-trace-id </td><td class="v">Root=1-5d2a21a2-34228ecc58efe04f1222718b </td></tr>
<tr><td class="e">accept </td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8 </td></tr>
<tr><td class="e">user-agent </td><td class="v">Mozilla/5.0 (iPad; CPU OS 12_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Mobile/15E148 Safari/604.1 </td></tr>
<tr><td class="e">accept-language </td><td class="v">en-us </td></tr>
<tr><td class="e">accept-encoding </td><td class="v">br, gzip, deflate </td></tr>
<tr><td class="e">cookie </td><td class="v">utag_main=v_id:016bec86d1f00020f3eac1386b7c00082002307a00720$_sn:1$_ss:0$_st:1563043193774$ses_id:1563041386995%3Bexp-session$_pn:1%3Bexp-session$_prevpage:https%3A%2F%2Finteresting-hose.glitch.me%3Bexp-1563044993342; xdibx=N4Ig-mBGAeDGCuAnRIBcoAOGAuBnNAjAKwBsAzAAwAsBZAHAJwDsNANCBgG6wB22aAJirtc-VMXLVajFgXZdcvfuPaIkAGzQgAFtmwZcqAPRGA5uoCW2WNoB0sAPYBbIwFMAJlaMh26jVu9fPEJSAjoyIgjyOiIAX3YIGAxEV040UHcAQwBPMQBtCTChAhJSogZWCQEJJgIGYgFK0koaegY6AioAXXjwKGhU1z4xYF7EuAt3LQYSVzrYKncAWldwsiWqAXdYJYYAM2IlzMyKMgYGWCIqEkPCumKSIjomBhBYoA__; _fbp=fb.1.1561824165458.344315892; AMP_TOKEN=%24NOT_FOUND; _ga=GA1.2.1984539256.1560713312; _gid=GA1.2.472118973.1563041383; _ym_isad=2; _ym_d=<a href="tel:1563037791">1563037791</a>; _ym_uid=1563037791401540159; _sctr=1|1562389200000; cto_clc=1; fs_mixpanel=6620611623714816:<a href="tel:6429405517381632">6429405517381632</a>; mp_45c93e9160d1559cc951522c80f523f9_mixpanel=%7B%22distinct_id%22%3A%20%2216bc9132fe11e4-0a818597796d4c-10073e7b-c0000-16bc9132fe2e%22%2C%22%24device_id%22%3A%20%2216bc9132fe11e4-0a818597796d4c-10073e7b-c0000-16bc9132fe2e%22%2C%22%24initial_referrer%22%3A%20%22%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%2C%22FullStory%20Session%22%3A%20%22https%3A%2F%2Fapp.fullstory.com%2Fui%2F1F40C%2Fsession%2F6620611623714816%253A6429405517381632%22%2C%22__mps%22%3A%20%7B%22%24os%22%3A%20%22iOS%22%2C%22%24browser%22%3A%20%22Mobile%20Safari%22%2C%22%24browser_version%22%3A%2012.1%2C%22%24initial_referrer%22%3A%20%22%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%2C%22Most%20Recent%20FullStory%20Session%22%3A%20%22https%3A%2F%2Fapp.fullstory.com%2Fui%2F1F40C%2Fsession%2F6620611623714816%253A6429405517381632%22%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%7D; _gcl_au=1.1.621346183.1562446608; fs_uid=rs.fullstory.com`1F40C`6620611623714816:<a href="tel:6429405517381632">6429405517381632</a>; cto_lwid=d90447ca-46a8-49af-80f0-bb265c30ae1a; optimizelyEndUserId=oeu1562446603278r0.15479903484512691 </td></tr>
<tr><td class="e">x-request-id </td><td class="v">7655ccf1a49ed99f </td></tr>
<tr><td class="e">x-glitch-routing </td><td class="v">21ab5761-9dd2-4e01-9621-f9bf2317b5f5:1085 </td></tr>
<tr><td class="e">x-forwarded-host </td><td class="v">heavy-beginner.glitch.me </td></tr>
<tr class="h"><th colspan="2">HTTP Response Headers</th></tr>
</tbody></table>
<h2><a name="module_calendar">calendar</a></h2>
<table>
<tbody><tr><td class="e">Calendar support </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_core">Core</a></h2>
<table>
<tbody><tr><td class="e">PHP Version </td><td class="v">7.0.33-0ubuntu0.16.04.5 </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">allow_url_fopen</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">allow_url_include</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">arg_separator.input</td><td class="v">&amp;</td><td class="v">&amp;</td></tr>
<tr><td class="e">arg_separator.output</td><td class="v">&amp;</td><td class="v">&amp;</td></tr>
<tr><td class="e">auto_append_file</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">auto_globals_jit</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">auto_prepend_file</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">browscap</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">default_charset</td><td class="v">UTF-8</td><td class="v">UTF-8</td></tr>
<tr><td class="e">default_mimetype</td><td class="v">text/html</td><td class="v">text/html</td></tr>
<tr><td class="e">disable_classes</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">disable_functions</td><td class="v">pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,</td><td class="v">pcntl_alarm,pcntl_fork,pcntl_waitpid,pcntl_wait,pcntl_wifexited,pcntl_wifstopped,pcntl_wifsignaled,pcntl_wifcontinued,pcntl_wexitstatus,pcntl_wtermsig,pcntl_wstopsig,pcntl_signal,pcntl_signal_dispatch,pcntl_get_last_error,pcntl_strerror,pcntl_sigprocmask,pcntl_sigwaitinfo,pcntl_sigtimedwait,pcntl_exec,pcntl_getpriority,pcntl_setpriority,</td></tr>
<tr><td class="e">display_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">display_startup_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">doc_root</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">docref_ext</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">docref_root</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">enable_dl</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">enable_post_data_reading</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">error_append_string</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">error_log</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">error_prepend_string</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">error_reporting</td><td class="v">22527</td><td class="v">22527</td></tr>
<tr><td class="e">exit_on_timeout</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">expose_php</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">extension_dir</td><td class="v">/usr/lib/php/20151012</td><td class="v">/usr/lib/php/20151012</td></tr>
<tr><td class="e">file_uploads</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">highlight.comment</td><td class="v"><font style="color: #FF8000">#FF8000</font></td><td class="v"><font style="color: #FF8000">#FF8000</font></td></tr>
<tr><td class="e">highlight.default</td><td class="v"><font style="color: #0000BB">#0000BB</font></td><td class="v"><font style="color: #0000BB">#0000BB</font></td></tr>
<tr><td class="e">highlight.html</td><td class="v"><font style="color: #000000">#000000</font></td><td class="v"><font style="color: #000000">#000000</font></td></tr>
<tr><td class="e">highlight.keyword</td><td class="v"><font style="color: #007700">#007700</font></td><td class="v"><font style="color: #007700">#007700</font></td></tr>
<tr><td class="e">highlight.string</td><td class="v"><font style="color: #DD0000">#DD0000</font></td><td class="v"><font style="color: #DD0000">#DD0000</font></td></tr>
<tr><td class="e">html_errors</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">ignore_repeated_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">ignore_repeated_source</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">ignore_user_abort</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">implicit_flush</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">include_path</td><td class="v">.:/usr/share/php</td><td class="v">.:/usr/share/php</td></tr>
<tr><td class="e">input_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">log_errors</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">log_errors_max_len</td><td class="v">1024</td><td class="v">1024</td></tr>
<tr><td class="e">mail.add_x_header</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">mail.force_extra_parameters</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mail.log</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">max_execution_time</td><td class="v">30</td><td class="v">30</td></tr>
<tr><td class="e">max_file_uploads</td><td class="v">20</td><td class="v">20</td></tr>
<tr><td class="e">max_input_nesting_level</td><td class="v">64</td><td class="v">64</td></tr>
<tr><td class="e">max_input_time</td><td class="v">60</td><td class="v">60</td></tr>
<tr><td class="e">max_input_vars</td><td class="v">1000</td><td class="v">1000</td></tr>
<tr><td class="e">memory_limit</td><td class="v">128M</td><td class="v">128M</td></tr>
<tr><td class="e">open_basedir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">output_buffering</td><td class="v">4096</td><td class="v">4096</td></tr>
<tr><td class="e">output_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">output_handler</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">post_max_size</td><td class="v">8M</td><td class="v">8M</td></tr>
<tr><td class="e">precision</td><td class="v">14</td><td class="v">14</td></tr>
<tr><td class="e">realpath_cache_size</td><td class="v">4096K</td><td class="v">4096K</td></tr>
<tr><td class="e">realpath_cache_ttl</td><td class="v">120</td><td class="v">120</td></tr>
<tr><td class="e">register_argc_argv</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">report_memleaks</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">report_zend_debug</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">request_order</td><td class="v">GP</td><td class="v">GP</td></tr>
<tr><td class="e">sendmail_from</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">sendmail_path</td><td class="v">/usr/sbin/sendmail&nbsp;-t&nbsp;-i&nbsp;</td><td class="v">/usr/sbin/sendmail&nbsp;-t&nbsp;-i&nbsp;</td></tr>
<tr><td class="e">serialize_precision</td><td class="v">17</td><td class="v">17</td></tr>
<tr><td class="e">short_open_tag</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">SMTP</td><td class="v">localhost</td><td class="v">localhost</td></tr>
<tr><td class="e">smtp_port</td><td class="v">25</td><td class="v">25</td></tr>
<tr><td class="e">sql.safe_mode</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">sys_temp_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">track_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">unserialize_callback_func</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">upload_max_filesize</td><td class="v">2M</td><td class="v">2M</td></tr>
<tr><td class="e">upload_tmp_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">user_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">user_ini.cache_ttl</td><td class="v">300</td><td class="v">300</td></tr>
<tr><td class="e">user_ini.filename</td><td class="v">.user.ini</td><td class="v">.user.ini</td></tr>
<tr><td class="e">variables_order</td><td class="v">GPCS</td><td class="v">GPCS</td></tr>
<tr><td class="e">xmlrpc_error_number</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">xmlrpc_errors</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">zend.assertions</td><td class="v">-1</td><td class="v">-1</td></tr>
<tr><td class="e">zend.detect_unicode</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">zend.enable_gc</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">zend.multibyte</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">zend.script_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2><a name="module_ctype">ctype</a></h2>
<table>
<tbody><tr><td class="e">ctype functions </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_curl">curl</a></h2>
<table>
<tbody><tr><td class="e">cURL support </td><td class="v">enabled </td></tr>
<tr><td class="e">cURL Information </td><td class="v">7.47.0 </td></tr>
<tr><td class="e">Age </td><td class="v">3 </td></tr>
<tr><td class="e">Features </td></tr>
<tr><td class="e">AsynchDNS </td><td class="v">Yes </td></tr>
<tr><td class="e">CharConv </td><td class="v">No </td></tr>
<tr><td class="e">Debug </td><td class="v">No </td></tr>
<tr><td class="e">GSS-Negotiate </td><td class="v">No </td></tr>
<tr><td class="e">IDN </td><td class="v">Yes </td></tr>
<tr><td class="e">IPv6 </td><td class="v">Yes </td></tr>
<tr><td class="e">krb4 </td><td class="v">No </td></tr>
<tr><td class="e">Largefile </td><td class="v">Yes </td></tr>
<tr><td class="e">libz </td><td class="v">Yes </td></tr>
<tr><td class="e">NTLM </td><td class="v">Yes </td></tr>
<tr><td class="e">NTLMWB </td><td class="v">Yes </td></tr>
<tr><td class="e">SPNEGO </td><td class="v">Yes </td></tr>
<tr><td class="e">SSL </td><td class="v">Yes </td></tr>
<tr><td class="e">SSPI </td><td class="v">No </td></tr>
<tr><td class="e">TLS-SRP </td><td class="v">Yes </td></tr>
<tr><td class="e">HTTP2 </td><td class="v">No </td></tr>
<tr><td class="e">GSSAPI </td><td class="v">Yes </td></tr>
<tr><td class="e">KERBEROS5 </td><td class="v">Yes </td></tr>
<tr><td class="e">UNIX_SOCKETS </td><td class="v">Yes </td></tr>
<tr><td class="e">PSL </td><td class="v">No </td></tr>
<tr><td class="e">Protocols </td><td class="v">dict, file, ftp, ftps, gopher, http, https, imap, imaps, ldap, ldaps, pop3, pop3s, rtmp, rtsp, smb, smbs, smtp, smtps, telnet, tftp </td></tr>
<tr><td class="e">Host </td><td class="v">x86_64-pc-linux-gnu </td></tr>
<tr><td class="e">SSL Version </td><td class="v">OpenSSL/1.0.2g </td></tr>
<tr><td class="e">ZLib Version </td><td class="v">1.2.8 </td></tr>
</tbody></table>
<h2><a name="module_date">date</a></h2>
<table>
<tbody><tr><td class="e">date/time support </td><td class="v">enabled </td></tr>
<tr><td class="e">timelib version </td><td class="v">2016.02 </td></tr>
<tr><td class="e">"Olson" Timezone Database Version </td><td class="v">0.system </td></tr>
<tr><td class="e">Timezone Database </td><td class="v">internal </td></tr>
<tr><td class="e">Default timezone </td><td class="v">UTC </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">date.default_latitude</td><td class="v">31.7667</td><td class="v">31.7667</td></tr>
<tr><td class="e">date.default_longitude</td><td class="v">35.2333</td><td class="v">35.2333</td></tr>
<tr><td class="e">date.sunrise_zenith</td><td class="v">90.583333</td><td class="v">90.583333</td></tr>
<tr><td class="e">date.sunset_zenith</td><td class="v">90.583333</td><td class="v">90.583333</td></tr>
<tr><td class="e">date.timezone</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2><a name="module_dom">dom</a></h2>
<table>
<tbody><tr><td class="e">DOM/XML </td><td class="v">enabled </td></tr>
<tr><td class="e">DOM/XML API Version </td><td class="v">20031129 </td></tr>
<tr><td class="e">libxml Version </td><td class="v">2.9.3 </td></tr>
<tr><td class="e">HTML Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPath Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPointer Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Schema Support </td><td class="v">enabled </td></tr>
<tr><td class="e">RelaxNG Support </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_exif">exif</a></h2>
<table>
<tbody><tr><td class="e">EXIF Support </td><td class="v">enabled </td></tr>
<tr><td class="e">EXIF Version </td><td class="v">7.0.33-0ubuntu0.16.04.5 </td></tr>
<tr><td class="e">Supported EXIF Version </td><td class="v">0220 </td></tr>
<tr><td class="e">Supported filetypes </td><td class="v">JPEG,TIFF </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">exif.decode_jis_intel</td><td class="v">JIS</td><td class="v">JIS</td></tr>
<tr><td class="e">exif.decode_jis_motorola</td><td class="v">JIS</td><td class="v">JIS</td></tr>
<tr><td class="e">exif.decode_unicode_intel</td><td class="v">UCS-2LE</td><td class="v">UCS-2LE</td></tr>
<tr><td class="e">exif.decode_unicode_motorola</td><td class="v">UCS-2BE</td><td class="v">UCS-2BE</td></tr>
<tr><td class="e">exif.encode_jis</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">exif.encode_unicode</td><td class="v">ISO-8859-15</td><td class="v">ISO-8859-15</td></tr>
</tbody></table>
<h2><a name="module_fileinfo">fileinfo</a></h2>
<table>
<tbody><tr><td class="e">fileinfo support </td><td class="v">enabled </td></tr>
<tr><td class="e">version </td><td class="v">1.0.5 </td></tr>
<tr><td class="e">libmagic </td><td class="v">522 </td></tr>
</tbody></table>
<h2><a name="module_filter">filter</a></h2>
<table>
<tbody><tr><td class="e">Input Validation and Filtering </td><td class="v">enabled </td></tr>
<tr><td class="e">Revision </td><td class="v">$Id: 28fcca4bfda9c9907588a64d245b49cb398249d8 $ </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">filter.default</td><td class="v">unsafe_raw</td><td class="v">unsafe_raw</td></tr>
<tr><td class="e">filter.default_flags</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2><a name="module_ftp">ftp</a></h2>
<table>
<tbody><tr><td class="e">FTP support </td><td class="v">enabled </td></tr>
<tr><td class="e">FTPS support </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_gd">gd</a></h2>
<table>
<tbody><tr><td class="e">GD Support </td><td class="v">enabled </td></tr>
<tr><td class="e">GD headers Version </td><td class="v">2.1.1 </td></tr>
<tr><td class="e">GD library Version </td><td class="v">2.1.1 </td></tr>
<tr><td class="e">FreeType Support </td><td class="v">enabled </td></tr>
<tr><td class="e">FreeType Linkage </td><td class="v">with freetype </td></tr>
<tr><td class="e">FreeType Version </td><td class="v">2.6.1 </td></tr>
<tr><td class="e">GIF Read Support </td><td class="v">enabled </td></tr>
<tr><td class="e">GIF Create Support </td><td class="v">enabled </td></tr>
<tr><td class="e">JPEG Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libJPEG Version </td><td class="v">8 </td></tr>
<tr><td class="e">PNG Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libPNG Version </td><td class="v">1.2.54 </td></tr>
<tr><td class="e">WBMP Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPM Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libXpm Version </td><td class="v">30411 </td></tr>
<tr><td class="e">XBM Support </td><td class="v">enabled </td></tr>
<tr><td class="e">WebP Support </td><td class="v">enabled </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">gd.jpeg_ignore_warning</td><td class="v">0</td><td class="v">0</td></tr>
</tbody></table>
<h2><a name="module_gettext">gettext</a></h2>
<table>
<tbody><tr><td class="e">GetText Support </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_hash">hash</a></h2>
<table>
<tbody><tr><td class="e">hash support </td><td class="v">enabled </td></tr>
<tr><td class="e">Hashing Engines </td><td class="v">md2 md4 md5 sha1 sha224 sha256 sha384 sha512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost gost-crypto adler32 crc32 crc32b fnv132 fnv1a32 fnv164 fnv1a64 joaat haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5  </td></tr>
</tbody></table>
<table>
<tbody><tr><td class="e">MHASH support </td><td class="v">Enabled </td></tr>
<tr><td class="e">MHASH API Version </td><td class="v">Emulated Support </td></tr>
</tbody></table>
<h2><a name="module_iconv">iconv</a></h2>
<table>
<tbody><tr><td class="e">iconv support </td><td class="v">enabled </td></tr>
<tr><td class="e">iconv implementation </td><td class="v">glibc </td></tr>
<tr><td class="e">iconv library version </td><td class="v">2.23 </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">iconv.input_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">iconv.internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">iconv.output_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2><a name="module_json">json</a></h2>
<table>
<tbody><tr><td class="e">json support </td><td class="v">enabled </td></tr>
<tr><td class="e">json version </td><td class="v">1.4.0 </td></tr>
</tbody></table>
<h2><a name="module_libxml">libxml</a></h2>
<table>
<tbody><tr><td class="e">libXML support </td><td class="v">active </td></tr>
<tr><td class="e">libXML Compiled Version </td><td class="v">2.9.3 </td></tr>
<tr><td class="e">libXML Loaded Version </td><td class="v">20903 </td></tr>
<tr><td class="e">libXML streams </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_mbstring">mbstring</a></h2>
<table>
<tbody><tr><td class="e">Multibyte Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Multibyte string engine </td><td class="v">libmbfl </td></tr>
<tr><td class="e">HTTP input encoding translation </td><td class="v">disabled </td></tr>
<tr><td class="e">libmbfl version </td><td class="v">1.3.2 </td></tr>
<tr><td class="e">oniguruma version </td><td class="v">5.9.6 </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>mbstring extension makes use of "streamable kanji code filter and converter", which is distributed under the GNU Lesser General Public License version 2.1.</th></tr>
</tbody></table>
<table>
<tbody><tr><td class="e">Multibyte (japanese) regex support </td><td class="v">enabled </td></tr>
<tr><td class="e">Multibyte regex (oniguruma) backtrack check </td><td class="v">On </td></tr>
<tr><td class="e">Multibyte regex (oniguruma) version </td><td class="v">5.9.6 </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mbstring.detect_order</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.encoding_translation</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mbstring.func_overload</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">mbstring.http_input</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.http_output</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.http_output_conv_mimetypes</td><td class="v">^(text/|application/xhtml\+xml)</td><td class="v">^(text/|application/xhtml\+xml)</td></tr>
<tr><td class="e">mbstring.internal_encoding</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.language</td><td class="v">neutral</td><td class="v">neutral</td></tr>
<tr><td class="e">mbstring.strict_detection</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mbstring.substitute_character</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2><a name="module_mcrypt">mcrypt</a></h2>
<table>
<tbody><tr class="h"><th>mcrypt support</th><th>enabled</th></tr>
<tr class="h"><th>mcrypt_filter support</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">2.5.8 </td></tr>
<tr><td class="e">Api No </td><td class="v">20021217 </td></tr>
<tr><td class="e">Supported ciphers </td><td class="v">cast-128 gost rijndael-128 twofish arcfour cast-256 loki97 rijndael-192 saferplus wake blowfish-compat des rijndael-256 serpent xtea blowfish enigma rc2 tripledes  </td></tr>
<tr><td class="e">Supported modes </td><td class="v">cbc cfb ctr ecb ncfb nofb ofb stream  </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mcrypt.algorithms_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mcrypt.modes_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2><a name="module_mysqli">mysqli</a></h2>
<table>
<tbody><tr class="h"><th>MysqlI Support</th><th>enabled</th></tr>
<tr><td class="e">Client API library version </td><td class="v">mysqlnd 5.0.12-dev - 20150407 - $Id: b5c5906d452ec590732a93b051f3827e02749b83 $ </td></tr>
<tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Inactive Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Active Links </td><td class="v">0 </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mysqli.allow_local_infile</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">mysqli.allow_persistent</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">mysqli.default_host</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_port</td><td class="v">3306</td><td class="v">3306</td></tr>
<tr><td class="e">mysqli.default_pw</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_socket</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_user</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.max_links</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">mysqli.max_persistent</td><td class="v">Unlimited</td><td class="v">Unlimited</td></tr>
<tr><td class="e">mysqli.reconnect</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">mysqli.rollback_on_cached_plink</td><td class="v">Off</td><td class="v">Off</td></tr>
</tbody></table>
<h2><a name="module_mysqlnd">mysqlnd</a></h2>
<table>
<tbody><tr class="h"><th>mysqlnd</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">mysqlnd 5.0.12-dev - 20150407 - $Id: b5c5906d452ec590732a93b051f3827e02749b83 $ </td></tr>
<tr><td class="e">Compression </td><td class="v">supported </td></tr>
<tr><td class="e">core SSL </td><td class="v">supported </td></tr>
<tr><td class="e">extended SSL </td><td class="v">supported </td></tr>
<tr><td class="e">Command buffer size </td><td class="v">4096 </td></tr>
<tr><td class="e">Read buffer size </td><td class="v">32768 </td></tr>
<tr><td class="e">Read timeout </td><td class="v">31536000 </td></tr>
<tr><td class="e">Collecting statistics </td><td class="v">Yes </td></tr>
<tr><td class="e">Collecting memory statistics </td><td class="v">No </td></tr>
<tr><td class="e">Tracing </td><td class="v">n/a </td></tr>
<tr><td class="e">Loaded plugins </td><td class="v">mysqlnd,debug_trace,auth_plugin_mysql_native_password,auth_plugin_mysql_clear_password,auth_plugin_sha256_password </td></tr>
<tr><td class="e">API Extensions </td><td class="v">mysqli,pdo_mysql </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>mysqlnd statistics</th><th> </th></tr>
<tr><td class="e">bytes_sent </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received </td><td class="v">0 </td></tr>
<tr><td class="e">packets_sent </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received </td><td class="v">0 </td></tr>
<tr><td class="e">protocol_overhead_in </td><td class="v">0 </td></tr>
<tr><td class="e">protocol_overhead_out </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_ok_packet </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_eof_packet </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_rset_header_packet </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_rset_field_meta_packet </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_rset_row_packet </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_prepare_response_packet </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_change_user_packet </td><td class="v">0 </td></tr>
<tr><td class="e">packets_sent_command </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_ok </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_eof </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_rset_header </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_rset_field_meta </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_rset_row </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_prepare_response </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_change_user </td><td class="v">0 </td></tr>
<tr><td class="e">result_set_queries </td><td class="v">0 </td></tr>
<tr><td class="e">non_result_set_queries </td><td class="v">0 </td></tr>
<tr><td class="e">no_index_used </td><td class="v">0 </td></tr>
<tr><td class="e">bad_index_used </td><td class="v">0 </td></tr>
<tr><td class="e">slow_queries </td><td class="v">0 </td></tr>
<tr><td class="e">buffered_sets </td><td class="v">0 </td></tr>
<tr><td class="e">unbuffered_sets </td><td class="v">0 </td></tr>
<tr><td class="e">ps_buffered_sets </td><td class="v">0 </td></tr>
<tr><td class="e">ps_unbuffered_sets </td><td class="v">0 </td></tr>
<tr><td class="e">flushed_normal_sets </td><td class="v">0 </td></tr>
<tr><td class="e">flushed_ps_sets </td><td class="v">0 </td></tr>
<tr><td class="e">ps_prepared_never_executed </td><td class="v">0 </td></tr>
<tr><td class="e">ps_prepared_once_executed </td><td class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_server_normal </td><td class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_server_ps </td><td class="v">0 </td></tr>
<tr><td class="e">rows_buffered_from_client_normal </td><td class="v">0 </td></tr>
<tr><td class="e">rows_buffered_from_client_ps </td><td class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_client_normal_buffered </td><td class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_client_normal_unbuffered </td><td class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_client_ps_buffered </td><td class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_client_ps_unbuffered </td><td class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_client_ps_cursor </td><td class="v">0 </td></tr>
<tr><td class="e">rows_affected_normal </td><td class="v">0 </td></tr>
<tr><td class="e">rows_affected_ps </td><td class="v">0 </td></tr>
<tr><td class="e">rows_skipped_normal </td><td class="v">0 </td></tr>
<tr><td class="e">rows_skipped_ps </td><td class="v">0 </td></tr>
<tr><td class="e">copy_on_write_saved </td><td class="v">0 </td></tr>
<tr><td class="e">copy_on_write_performed </td><td class="v">0 </td></tr>
<tr><td class="e">command_buffer_too_small </td><td class="v">0 </td></tr>
<tr><td class="e">connect_success </td><td class="v">0 </td></tr>
<tr><td class="e">connect_failure </td><td class="v">0 </td></tr>
<tr><td class="e">connection_reused </td><td class="v">0 </td></tr>
<tr><td class="e">reconnect </td><td class="v">0 </td></tr>
<tr><td class="e">pconnect_success </td><td class="v">0 </td></tr>
<tr><td class="e">active_connections </td><td class="v">0 </td></tr>
<tr><td class="e">active_persistent_connections </td><td class="v">0 </td></tr>
<tr><td class="e">explicit_close </td><td class="v">0 </td></tr>
<tr><td class="e">implicit_close </td><td class="v">0 </td></tr>
<tr><td class="e">disconnect_close </td><td class="v">0 </td></tr>
<tr><td class="e">in_middle_of_command_close </td><td class="v">0 </td></tr>
<tr><td class="e">explicit_free_result </td><td class="v">0 </td></tr>
<tr><td class="e">implicit_free_result </td><td class="v">0 </td></tr>
<tr><td class="e">explicit_stmt_close </td><td class="v">0 </td></tr>
<tr><td class="e">implicit_stmt_close </td><td class="v">0 </td></tr>
<tr><td class="e">mem_emalloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_emalloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_ecalloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_ecalloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_erealloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_erealloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_efree_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_efree_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_malloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_malloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_calloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_calloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_realloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_realloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_free_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_free_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_estrndup_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_strndup_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_estndup_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_strdup_count </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_null </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_bit </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_tinyint </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_short </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_int24 </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_int </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_bigint </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_decimal </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_float </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_double </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_date </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_year </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_time </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_datetime </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_timestamp </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_string </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_blob </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_enum </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_set </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_geometry </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_other </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_null </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_bit </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_tinyint </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_short </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_int24 </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_int </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_bigint </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_decimal </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_float </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_double </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_date </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_year </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_time </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_datetime </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_timestamp </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_string </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_json </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_blob </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_enum </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_set </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_geometry </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_other </td><td class="v">0 </td></tr>
<tr><td class="e">init_command_executed_count </td><td class="v">0 </td></tr>
<tr><td class="e">init_command_failed_count </td><td class="v">0 </td></tr>
<tr><td class="e">com_quit </td><td class="v">0 </td></tr>
<tr><td class="e">com_init_db </td><td class="v">0 </td></tr>
<tr><td class="e">com_query </td><td class="v">0 </td></tr>
<tr><td class="e">com_field_list </td><td class="v">0 </td></tr>
<tr><td class="e">com_create_db </td><td class="v">0 </td></tr>
<tr><td class="e">com_drop_db </td><td class="v">0 </td></tr>
<tr><td class="e">com_refresh </td><td class="v">0 </td></tr>
<tr><td class="e">com_shutdown </td><td class="v">0 </td></tr>
<tr><td class="e">com_statistics </td><td class="v">0 </td></tr>
<tr><td class="e">com_process_info </td><td class="v">0 </td></tr>
<tr><td class="e">com_connect </td><td class="v">0 </td></tr>
<tr><td class="e">com_process_kill </td><td class="v">0 </td></tr>
<tr><td class="e">com_debug </td><td class="v">0 </td></tr>
<tr><td class="e">com_ping </td><td class="v">0 </td></tr>
<tr><td class="e">com_time </td><td class="v">0 </td></tr>
<tr><td class="e">com_delayed_insert </td><td class="v">0 </td></tr>
<tr><td class="e">com_change_user </td><td class="v">0 </td></tr>
<tr><td class="e">com_binlog_dump </td><td class="v">0 </td></tr>
<tr><td class="e">com_table_dump </td><td class="v">0 </td></tr>
<tr><td class="e">com_connect_out </td><td class="v">0 </td></tr>
<tr><td class="e">com_register_slave </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_prepare </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_execute </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_send_long_data </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_close </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_reset </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_set_option </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_fetch </td><td class="v">0 </td></tr>
<tr><td class="e">com_deamon </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_real_data_normal </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_real_data_ps </td><td class="v">0 </td></tr>
</tbody></table>
<h2><a name="module_openssl">openssl</a></h2>
<table>
<tbody><tr><td class="e">OpenSSL support </td><td class="v">enabled </td></tr>
<tr><td class="e">OpenSSL Library Version </td><td class="v">OpenSSL 1.0.2g  1 Mar 2016 </td></tr>
<tr><td class="e">OpenSSL Header Version </td><td class="v">OpenSSL 1.0.2g  1 Mar 2016 </td></tr>
<tr><td class="e">Openssl default config </td><td class="v">/usr/lib/ssl/openssl.cnf </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">openssl.cafile</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">openssl.capath</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2><a name="module_pcre">pcre</a></h2>
<table>
<tbody><tr><td class="e">PCRE (Perl Compatible Regular Expressions) Support </td><td class="v">enabled </td></tr>
<tr><td class="e">PCRE Library Version </td><td class="v">8.38 2015-11-23 </td></tr>
<tr><td class="e">PCRE JIT Support </td><td class="v">enabled </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">pcre.backtrack_limit</td><td class="v"><a href="tel:1000000">1000000</a></td><td class="v"><a href="tel:1000000">1000000</a></td></tr>
<tr><td class="e">pcre.jit</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">pcre.recursion_limit</td><td class="v">100000</td><td class="v">100000</td></tr>
</tbody></table>
<h2><a name="module_pdo">PDO</a></h2>
<table>
<tbody><tr class="h"><th>PDO support</th><th>enabled</th></tr>
<tr><td class="e">PDO drivers </td><td class="v">mysql, sqlite </td></tr>
</tbody></table>
<h2><a name="module_pdo_mysql">pdo_mysql</a></h2>
<table>
<tbody><tr class="h"><th>PDO Driver for MySQL</th><th>enabled</th></tr>
<tr><td class="e">Client API version </td><td class="v">mysqlnd 5.0.12-dev - 20150407 - $Id: b5c5906d452ec590732a93b051f3827e02749b83 $ </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">pdo_mysql.default_socket</td><td class="v">/var/run/mysqld/mysqld.sock</td><td class="v">/var/run/mysqld/mysqld.sock</td></tr>
</tbody></table>
<h2><a name="module_pdo_sqlite">pdo_sqlite</a></h2>
<table>
<tbody><tr class="h"><th>PDO Driver for SQLite 3.x</th><th>enabled</th></tr>
<tr><td class="e">SQLite Library </td><td class="v">3.11.0 </td></tr>
</tbody></table>
<h2><a name="module_phar">Phar</a></h2>
<table>
<tbody><tr class="h"><th>Phar: PHP Archive support</th><th>enabled</th></tr>
<tr><td class="e">Phar EXT version </td><td class="v">2.0.2 </td></tr>
<tr><td class="e">Phar API version </td><td class="v">1.1.1 </td></tr>
<tr><td class="e">SVN revision </td><td class="v">$Id: 308c1e92e8ad12e51f5db846d3366fdf3487eb21 $ </td></tr>
<tr><td class="e">Phar-based phar archives </td><td class="v">enabled </td></tr>
<tr><td class="e">Tar-based phar archives </td><td class="v">enabled </td></tr>
<tr><td class="e">ZIP-based phar archives </td><td class="v">enabled </td></tr>
<tr><td class="e">gzip compression </td><td class="v">enabled </td></tr>
<tr><td class="e">bzip2 compression </td><td class="v">disabled (install pecl/bz2) </td></tr>
<tr><td class="e">Native OpenSSL support </td><td class="v">enabled </td></tr>
</tbody></table>
<table>
<tbody><tr class="v"><td>
Phar based on pear/PHP_Archive, original concept by Davey Shafik.<br>Phar fully realized by Gregory Beaver and Marcus Boerger.<br>Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.</td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">phar.cache_list</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">phar.readonly</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">phar.require_hash</td><td class="v">On</td><td class="v">On</td></tr>
</tbody></table>
<h2><a name="module_posix">posix</a></h2>
<table>
<tbody><tr><td class="e">Revision </td><td class="v">$Id: b691ca925e7a085e6929579c4eba8fed0732e0ef $ </td></tr>
</tbody></table>
<h2><a name="module_readline">readline</a></h2>
<table>
<tbody><tr class="h"><th>Readline Support</th><th>enabled</th></tr>
<tr><td class="e">Readline library </td><td class="v">EditLine wrapper </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">cli.pager</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">cli.prompt</td><td class="v">\b&nbsp;\&gt;&nbsp;</td><td class="v">\b&nbsp;\&gt;&nbsp;</td></tr>
</tbody></table>
<h2><a name="module_reflection">Reflection</a></h2>
<table>
<tbody><tr class="h"><th>Reflection</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">$Id: e5303663dcb329e17818853ff223e5ee01481f2c $ </td></tr>
</tbody></table>
<h2><a name="module_session">session</a></h2>
<table>
<tbody><tr><td class="e">Session Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Registered save handlers </td><td class="v">files user  </td></tr>
<tr><td class="e">Registered serializer handlers </td><td class="v">php_serialize php php_binary wddx  </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">session.auto_start</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">session.cache_expire</td><td class="v">180</td><td class="v">180</td></tr>
<tr><td class="e">session.cache_limiter</td><td class="v">nocache</td><td class="v">nocache</td></tr>
<tr><td class="e">session.cookie_domain</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.cookie_httponly</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">session.cookie_lifetime</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.cookie_path</td><td class="v">/</td><td class="v">/</td></tr>
<tr><td class="e">session.cookie_secure</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">session.entropy_file</td><td class="v">/dev/urandom</td><td class="v">/dev/urandom</td></tr>
<tr><td class="e">session.entropy_length</td><td class="v">32</td><td class="v">32</td></tr>
<tr><td class="e">session.gc_divisor</td><td class="v">1000</td><td class="v">1000</td></tr>
<tr><td class="e">session.gc_maxlifetime</td><td class="v">1440</td><td class="v">1440</td></tr>
<tr><td class="e">session.gc_probability</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.hash_bits_per_character</td><td class="v">5</td><td class="v">5</td></tr>
<tr><td class="e">session.hash_function</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">session.lazy_write</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.name</td><td class="v">PHPSESSID</td><td class="v">PHPSESSID</td></tr>
<tr><td class="e">session.referer_check</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.save_handler</td><td class="v">files</td><td class="v">files</td></tr>
<tr><td class="e">session.save_path</td><td class="v">/var/lib/php/sessions</td><td class="v">/var/lib/php/sessions</td></tr>
<tr><td class="e">session.serialize_handler</td><td class="v">php</td><td class="v">php</td></tr>
<tr><td class="e">session.upload_progress.cleanup</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.upload_progress.enabled</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.upload_progress.freq</td><td class="v">1%</td><td class="v">1%</td></tr>
<tr><td class="e">session.upload_progress.min_freq</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">session.upload_progress.name</td><td class="v">PHP_SESSION_UPLOAD_PROGRESS</td><td class="v">PHP_SESSION_UPLOAD_PROGRESS</td></tr>
<tr><td class="e">session.upload_progress.prefix</td><td class="v">upload_progress_</td><td class="v">upload_progress_</td></tr>
<tr><td class="e">session.use_cookies</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.use_only_cookies</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">session.use_strict_mode</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">session.use_trans_sid</td><td class="v">0</td><td class="v">0</td></tr>
</tbody></table>
<h2><a name="module_shmop">shmop</a></h2>
<table>
<tbody><tr><td class="e">shmop support </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_simplexml">SimpleXML</a></h2>
<table>
<tbody><tr class="h"><th>Simplexml support</th><th>enabled</th></tr>
<tr><td class="e">Revision </td><td class="v">$Id: 0637e06af859ca1d0dea9c2f1530e51b98f1970e $ </td></tr>
<tr><td class="e">Schema support </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_sockets">sockets</a></h2>
<table>
<tbody><tr><td class="e">Sockets Support </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_spl">SPL</a></h2>
<table>
<tbody><tr class="h"><th>SPL support</th><th>enabled</th></tr>
<tr><td class="e">Interfaces </td><td class="v">Countable, OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject </td></tr>
<tr><td class="e">Classes </td><td class="v">AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, CallbackFilterIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveCallbackFilterIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException </td></tr>
</tbody></table>
<h2><a name="module_sqlite3">sqlite3</a></h2>
<table>
<tbody><tr class="h"><th>SQLite3 support</th><th>enabled</th></tr>
<tr><td class="e">SQLite3 module version </td><td class="v">7.0.33-0ubuntu0.16.04.5 </td></tr>
<tr><td class="e">SQLite Library </td><td class="v">3.11.0 </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">sqlite3.extension_dir</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2><a name="module_standard">standard</a></h2>
<table>
<tbody><tr><td class="e">Dynamic Library Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Path to sendmail </td><td class="v">/usr/sbin/sendmail -t -i  </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">assert.active</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">assert.bail</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">assert.callback</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">assert.exception</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">assert.quiet_eval</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">assert.warning</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">auto_detect_line_endings</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">default_socket_timeout</td><td class="v">60</td><td class="v">60</td></tr>
<tr><td class="e">from</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">url_rewriter.tags</td><td class="v">a=href,area=href,frame=src,input=src,form=fakeentry</td><td class="v">a=href,area=href,frame=src,input=src,form=fakeentry</td></tr>
<tr><td class="e">user_agent</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2><a name="module_sysvmsg">sysvmsg</a></h2>
<table>
<tbody><tr><td class="e">sysvmsg support </td><td class="v">enabled </td></tr>
<tr><td class="e">Revision </td><td class="v">$Id: dfb999763f95bfe9609fae60b4e07a492888ec7c $ </td></tr>
</tbody></table>
<h2><a name="module_sysvsem">sysvsem</a></h2>
<table>
<tbody><tr><td class="e">Version </td><td class="v">7.0.33-0ubuntu0.16.04.5 </td></tr>
</tbody></table>
<h2><a name="module_sysvshm">sysvshm</a></h2>
<table>
<tbody><tr><td class="e">Version </td><td class="v">7.0.33-0ubuntu0.16.04.5 </td></tr>
</tbody></table>
<h2><a name="module_tokenizer">tokenizer</a></h2>
<table>
<tbody><tr><td class="e">Tokenizer Support </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_wddx">wddx</a></h2>
<table>
<tbody><tr class="h"><th>WDDX Support</th><th>enabled</th></tr>
<tr><td class="e">WDDX Session Serializer </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_xml">xml</a></h2>
<table>
<tbody><tr><td class="e">XML Support </td><td class="v">active </td></tr>
<tr><td class="e">XML Namespace Support </td><td class="v">active </td></tr>
<tr><td class="e">libxml2 Version </td><td class="v">2.9.3 </td></tr>
</tbody></table>
<h2><a name="module_xmlreader">xmlreader</a></h2>
<table>
<tbody><tr><td class="e">XMLReader </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_xmlwriter">xmlwriter</a></h2>
<table>
<tbody><tr><td class="e">XMLWriter </td><td class="v">enabled </td></tr>
</tbody></table>
<h2><a name="module_xsl">xsl</a></h2>
<table>
<tbody><tr><td class="e">XSL </td><td class="v">enabled </td></tr>
<tr><td class="e">libxslt Version </td><td class="v">1.1.28 </td></tr>
<tr><td class="e">libxslt compiled against libxml Version </td><td class="v">2.9.3 </td></tr>
<tr><td class="e">EXSLT </td><td class="v">enabled </td></tr>
<tr><td class="e">libexslt Version </td><td class="v">1.1.28 </td></tr>
</tbody></table>
<h2><a name="module_zend+opcache">Zend OPcache</a></h2>
<table>
<tbody><tr><td class="e">Opcode Caching </td><td class="v">Up and Running </td></tr>
<tr><td class="e">Optimization </td><td class="v">Enabled </td></tr>
<tr><td class="e">SHM Cache </td><td class="v">Enabled </td></tr>
<tr><td class="e">File Cache </td><td class="v">Disabled </td></tr>
<tr><td class="e">Startup </td><td class="v">OK </td></tr>
<tr><td class="e">Shared memory model </td><td class="v">mmap </td></tr>
<tr><td class="e">Cache hits </td><td class="v">3 </td></tr>
<tr><td class="e">Cache misses </td><td class="v">1 </td></tr>
<tr><td class="e">Used memory </td><td class="v">9132800 </td></tr>
<tr><td class="e">Free memory </td><td class="v">57976064 </td></tr>
<tr><td class="e">Wasted memory </td><td class="v">0 </td></tr>
<tr><td class="e">Interned Strings Used memory </td><td class="v">229808 </td></tr>
<tr><td class="e">Interned Strings Free memory </td><td class="v">3964496 </td></tr>
<tr><td class="e">Cached scripts </td><td class="v">1 </td></tr>
<tr><td class="e">Cached keys </td><td class="v">1 </td></tr>
<tr><td class="e">Max keys </td><td class="v">3907 </td></tr>
<tr><td class="e">OOM restarts </td><td class="v">0 </td></tr>
<tr><td class="e">Hash keys restarts </td><td class="v">0 </td></tr>
<tr><td class="e">Manual restarts </td><td class="v">0 </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">opcache.blacklist_filename</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">opcache.consistency_checks</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">opcache.dups_fix</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">opcache.enable</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">opcache.enable_cli</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">opcache.enable_file_override</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">opcache.error_log</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">opcache.fast_shutdown</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">opcache.file_cache</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">opcache.file_cache_consistency_checks</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">opcache.file_cache_only</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">opcache.file_update_protection</td><td class="v">2</td><td class="v">2</td></tr>
<tr><td class="e">opcache.force_restart_timeout</td><td class="v">180</td><td class="v">180</td></tr>
<tr><td class="e">opcache.huge_code_pages</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">opcache.inherited_hack</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">opcache.interned_strings_buffer</td><td class="v">4</td><td class="v">4</td></tr>
<tr><td class="e">opcache.lockfile_path</td><td class="v">/tmp</td><td class="v">/tmp</td></tr>
<tr><td class="e">opcache.log_verbosity_level</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">opcache.max_accelerated_files</td><td class="v">2000</td><td class="v">2000</td></tr>
<tr><td class="e">opcache.max_file_size</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">opcache.max_wasted_percentage</td><td class="v">5</td><td class="v">5</td></tr>
<tr><td class="e">opcache.memory_consumption</td><td class="v">64</td><td class="v">64</td></tr>
<tr><td class="e">opcache.optimization_level</td><td class="v">0x7FFFBFFF</td><td class="v">0x7FFFBFFF</td></tr>
<tr><td class="e">opcache.preferred_memory_model</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">opcache.protect_memory</td><td class="v">0</td><td class="v">0</td></tr>
<tr><td class="e">opcache.restrict_api</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">opcache.revalidate_freq</td><td class="v">2</td><td class="v">2</td></tr>
<tr><td class="e">opcache.revalidate_path</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">opcache.save_comments</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">opcache.use_cwd</td><td class="v">On</td><td class="v">On</td></tr>
<tr><td class="e">opcache.validate_permission</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">opcache.validate_root</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">opcache.validate_timestamps</td><td class="v">On</td><td class="v">On</td></tr>
</tbody></table>
<h2><a name="module_zip">zip</a></h2>
<table>
<tbody><tr><td class="e">Zip </td><td class="v">enabled </td></tr>
<tr><td class="e">Zip version </td><td class="v">1.13.5 </td></tr>
<tr><td class="e">Libzip version </td><td class="v">1.0.1 </td></tr>
</tbody></table>
<h2><a name="module_zlib">zlib</a></h2>
<table>
<tbody><tr class="h"><th>ZLib Support</th><th>enabled</th></tr>
<tr><td class="e">Stream Wrapper </td><td class="v">compress.zlib:// </td></tr>
<tr><td class="e">Stream Filter </td><td class="v">zlib.inflate, zlib.deflate </td></tr>
<tr><td class="e">Compiled Version </td><td class="v">1.2.8 </td></tr>
<tr><td class="e">Linked Version </td><td class="v">1.2.8 </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">zlib.output_compression</td><td class="v">Off</td><td class="v">Off</td></tr>
<tr><td class="e">zlib.output_compression_level</td><td class="v">-1</td><td class="v">-1</td></tr>
<tr><td class="e">zlib.output_handler</td><td class="v"><i>no value</i></td><td class="v"><i>no value</i></td></tr>
</tbody></table>
<h2>Additional Modules</h2>
<table>
<tbody><tr class="h"><th>Module Name</th></tr>
</tbody></table>
<h2>Environment</h2>
<table>
<tbody><tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">DEFAULT_NODE_VERSION </td><td class="v">10 </td></tr>
<tr><td class="e">HOSTNAME </td><td class="v">22864f79614c </td></tr>
<tr><td class="e">SECRET </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">GEM_HOME </td><td class="v">/app/.local/gems </td></tr>
<tr><td class="e">APACHE_RUN_USER </td><td class="v">app </td></tr>
<tr><td class="e">PROJECT_DOMAIN </td><td class="v">heavy-beginner </td></tr>
<tr><td class="e">TERM </td><td class="v">xterm </td></tr>
<tr><td class="e">PROJECT_INVITE_TOKEN </td><td class="v">dac6d43f-5ff6-4893-b532-dabf6033fc81 </td></tr>
<tr><td class="e">HOST_ADDRESS </td><td class="v">172.17.0.1 </td></tr>
<tr><td class="e">LC_ALL </td><td class="v">en_US.UTF-8 </td></tr>
<tr><td class="e">USER_PATH </td><td class="v">/app/bin:/app/.local/bin:/app/node_modules/.bin:/opt/rust/cargo/bin:/usr/local/go/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin </td></tr>
<tr><td class="e">DPKG_FRONTEND </td><td class="v">noninteractive </td></tr>
<tr><td class="e">ENABLE_SERVER_SIDE_MONITORING </td><td class="v">false </td></tr>
<tr><td class="e">API_SERVER_EXTERNAL </td><td class="v">https://api.glitch.com </td></tr>
<tr><td class="e">APACHE_LOG_DIR </td><td class="v">log </td></tr>
<tr><td class="e">PATH </td><td class="v">/app/bin:/app/.local/bin:/app/node_modules/.bin:/opt/rust/cargo/bin:/usr/local/go/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin </td></tr>
<tr><td class="e">CARGO_HOME </td><td class="v">/opt/rust/cargo </td></tr>
<tr><td class="e">PROJECT_NAME </td><td class="v">heavy-beginner </td></tr>
<tr><td class="e">PROJECT_ID </td><td class="v">21ab5761-9dd2-4e01-9621-f9bf2317b5f5 </td></tr>
<tr><td class="e">PWD </td><td class="v">/app </td></tr>
<tr><td class="e">JAVA_HOME </td><td class="v">/usr/lib/jvm/java-8-openjdk-amd64 </td></tr>
<tr><td class="e">APACHE_RUN_GROUP </td><td class="v">app </td></tr>
<tr><td class="e">LANG </td><td class="v">en_US.UTF-8 </td></tr>
<tr><td class="e">APP_TYPES_DIR </td><td class="v">/opt/watcher/app-types </td></tr>
<tr><td class="e">INSIDE_DOCKER </td><td class="v">true </td></tr>
<tr><td class="e">ENVIRONMENT </td><td class="v">production </td></tr>
<tr><td class="e">SHLVL </td><td class="v">5 </td></tr>
<tr><td class="e">HOME </td><td class="v">/app </td></tr>
<tr><td class="e">LANGUAGE </td><td class="v">en_US.UTF-8 </td></tr>
<tr><td class="e">RUSTUP_HOME </td><td class="v">/opt/rust/multirust </td></tr>
<tr><td class="e">DEFAULT_NODE_DIR </td><td class="v">/opt/nvm/versions/node/v10/bin </td></tr>
<tr><td class="e">DEBIAN_FRONTEND </td><td class="v">noninteractive </td></tr>
<tr><td class="e">PORT </td><td class="v">3000 </td></tr>
<tr><td class="e">APACHE_LOCK_DIR </td><td class="v">/tmp </td></tr>
<tr><td class="e">MADE_WITH </td><td class="v"><i>no value</i> </td></tr>
<tr><td class="e">PROJECT_REMIX_CHAIN </td><td class="v">["5d84fc89-5738-4540-8af0-e48386f695ea"] </td></tr>
<tr><td class="e">_ </td><td class="v">/usr/sbin/apache2 </td></tr>
</tbody></table>
<h2>PHP Variables</h2>
<table>
<tbody><tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">$_COOKIE['utag_main']</td><td class="v">v_id:016bec86d1f00020f3eac1386b7c00082002307a00720$_sn:1$_ss:0$_st:1563043193774$ses_id:1563041386995;exp-session$_pn:1;exp-session$_prevpage:https://interesting-hose.glitch.me;exp-1563044993342</td></tr>
<tr><td class="e">$_COOKIE['xdibx']</td><td class="v">N4Ig-mBGAeDGCuAnRIBcoAOGAuBnNAjAKwBsAzAAwAsBZAHAJwDsNANCBgG6wB22aAJirtc-VMXLVajFgXZdcvfuPaIkAGzQgAFtmwZcqAPRGA5uoCW2WNoB0sAPYBbIwFMAJlaMh26jVu9fPEJSAjoyIgjyOiIAX3YIGAxEV040UHcAQwBPMQBtCTChAhJSogZWCQEJJgIGYgFK0koaegY6AioAXXjwKGhU1z4xYF7EuAt3LQYSVzrYKncAWldwsiWqAXdYJYYAM2IlzMyKMgYGWCIqEkPCumKSIjomBhBYoA__</td></tr>
<tr><td class="e">$_COOKIE['_fbp']</td><td class="v">fb.1.1561824165458.344315892</td></tr>
<tr><td class="e">$_COOKIE['AMP_TOKEN']</td><td class="v">$NOT_FOUND</td></tr>
<tr><td class="e">$_COOKIE['_ga']</td><td class="v">GA1.2.1984539256.1560713312</td></tr>
<tr><td class="e">$_COOKIE['_gid']</td><td class="v">GA1.2.472118973.1563041383</td></tr>
<tr><td class="e">$_COOKIE['_ym_isad']</td><td class="v">2</td></tr>
<tr><td class="e">$_COOKIE['_ym_d']</td><td class="v"><a href="tel:1563037791">1563037791</a></td></tr>
<tr><td class="e">$_COOKIE['_ym_uid']</td><td class="v">1563037791401540159</td></tr>
<tr><td class="e">$_COOKIE['_sctr']</td><td class="v">1|1562389200000</td></tr>
<tr><td class="e">$_COOKIE['cto_clc']</td><td class="v">1</td></tr>
<tr><td class="e">$_COOKIE['fs_mixpanel']</td><td class="v">6620611623714816:<a href="tel:6429405517381632">6429405517381632</a></td></tr>
<tr><td class="e">$_COOKIE['mp_45c93e9160d1559cc951522c80f523f9_mixpanel']</td><td class="v">{"distinct_id": "16bc9132fe11e4-0a818597796d4c-10073e7b-c0000-16bc9132fe2e","$device_id": "16bc9132fe11e4-0a818597796d4c-10073e7b-c0000-16bc9132fe2e","$initial_referrer": "$direct","$initial_referring_domain": "$direct","FullStory Session": "https://app.fullstory.com/ui/1F40C/session/6620611623714816%3A6429405517381632","__mps": {"$os": "iOS","$browser": "Mobile Safari","$browser_version": 12.1,"$initial_referrer": "$direct","$initial_referring_domain": "$direct","Most Recent FullStory Session": "https://app.fullstory.com/ui/1F40C/session/6620611623714816%3A6429405517381632"},"__mpso": {},"__mpus": {},"__mpa": {},"__mpu": {},"__mpr": [],"__mpap": []}</td></tr>
<tr><td class="e">$_COOKIE['_gcl_au']</td><td class="v">1.1.621346183.1562446608</td></tr>
<tr><td class="e">$_COOKIE['fs_uid']</td><td class="v">rs.fullstory.com`1F40C`6620611623714816:<a href="tel:6429405517381632">6429405517381632</a></td></tr>
<tr><td class="e">$_COOKIE['cto_lwid']</td><td class="v">d90447ca-46a8-49af-80f0-bb265c30ae1a</td></tr>
<tr><td class="e">$_COOKIE['optimizelyEndUserId']</td><td class="v">oeu1562446603278r0.15479903484512691</td></tr>
<tr><td class="e">$_SERVER['HTTP_CONNECTION']</td><td class="v">close</td></tr>
<tr><td class="e">$_SERVER['HTTP_X_FORWARDED_FOR']</td><td class="v">50.24.30.47,::ffff:10.10.11.14,::ffff:10.10.10.252</td></tr>
<tr><td class="e">$_SERVER['HTTP_X_FORWARDED_PROTO']</td><td class="v">https,http,http</td></tr>
<tr><td class="e">$_SERVER['HTTP_X_FORWARDED_PORT']</td><td class="v">443,80,80</td></tr>
<tr><td class="e">$_SERVER['HTTP_HOST']</td><td class="v">heavy-beginner.glitch.me</td></tr>
<tr><td class="e">$_SERVER['HTTP_X_AMZN_TRACE_ID']</td><td class="v">Root=1-5d2a21a2-34228ecc58efe04f1222718b</td></tr>
<tr><td class="e">$_SERVER['HTTP_ACCEPT']</td><td class="v">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td></tr>
<tr><td class="e">$_SERVER['HTTP_USER_AGENT']</td><td class="v">Mozilla/5.0 (iPad; CPU OS 12_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/12.1.1 Mobile/15E148 Safari/604.1</td></tr>
<tr><td class="e">$_SERVER['HTTP_ACCEPT_LANGUAGE']</td><td class="v">en-us</td></tr>
<tr><td class="e">$_SERVER['HTTP_ACCEPT_ENCODING']</td><td class="v">br, gzip, deflate</td></tr>
<tr><td class="e">$_SERVER['HTTP_COOKIE']</td><td class="v">utag_main=v_id:016bec86d1f00020f3eac1386b7c00082002307a00720$_sn:1$_ss:0$_st:1563043193774$ses_id:1563041386995%3Bexp-session$_pn:1%3Bexp-session$_prevpage:https%3A%2F%2Finteresting-hose.glitch.me%3Bexp-1563044993342; xdibx=N4Ig-mBGAeDGCuAnRIBcoAOGAuBnNAjAKwBsAzAAwAsBZAHAJwDsNANCBgG6wB22aAJirtc-VMXLVajFgXZdcvfuPaIkAGzQgAFtmwZcqAPRGA5uoCW2WNoB0sAPYBbIwFMAJlaMh26jVu9fPEJSAjoyIgjyOiIAX3YIGAxEV040UHcAQwBPMQBtCTChAhJSogZWCQEJJgIGYgFK0koaegY6AioAXXjwKGhU1z4xYF7EuAt3LQYSVzrYKncAWldwsiWqAXdYJYYAM2IlzMyKMgYGWCIqEkPCumKSIjomBhBYoA__; _fbp=fb.1.1561824165458.344315892; AMP_TOKEN=%24NOT_FOUND; _ga=GA1.2.1984539256.1560713312; _gid=GA1.2.472118973.1563041383; _ym_isad=2; _ym_d=<a href="tel:1563037791">1563037791</a>; _ym_uid=1563037791401540159; _sctr=1|1562389200000; cto_clc=1; fs_mixpanel=6620611623714816:<a href="tel:6429405517381632">6429405517381632</a>; mp_45c93e9160d1559cc951522c80f523f9_mixpanel=%7B%22distinct_id%22%3A%20%2216bc9132fe11e4-0a818597796d4c-10073e7b-c0000-16bc9132fe2e%22%2C%22%24device_id%22%3A%20%2216bc9132fe11e4-0a818597796d4c-10073e7b-c0000-16bc9132fe2e%22%2C%22%24initial_referrer%22%3A%20%22%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%2C%22FullStory%20Session%22%3A%20%22https%3A%2F%2Fapp.fullstory.com%2Fui%2F1F40C%2Fsession%2F6620611623714816%253A6429405517381632%22%2C%22__mps%22%3A%20%7B%22%24os%22%3A%20%22iOS%22%2C%22%24browser%22%3A%20%22Mobile%20Safari%22%2C%22%24browser_version%22%3A%2012.1%2C%22%24initial_referrer%22%3A%20%22%24direct%22%2C%22%24initial_referring_domain%22%3A%20%22%24direct%22%2C%22Most%20Recent%20FullStory%20Session%22%3A%20%22https%3A%2F%2Fapp.fullstory.com%2Fui%2F1F40C%2Fsession%2F6620611623714816%253A6429405517381632%22%7D%2C%22__mpso%22%3A%20%7B%7D%2C%22__mpus%22%3A%20%7B%7D%2C%22__mpa%22%3A%20%7B%7D%2C%22__mpu%22%3A%20%7B%7D%2C%22__mpr%22%3A%20%5B%5D%2C%22__mpap%22%3A%20%5B%5D%7D; _gcl_au=1.1.621346183.1562446608; fs_uid=rs.fullstory.com`1F40C`6620611623714816:<a href="tel:6429405517381632">6429405517381632</a>; cto_lwid=d90447ca-46a8-49af-80f0-bb265c30ae1a; optimizelyEndUserId=oeu1562446603278r0.15479903484512691</td></tr>
<tr><td class="e">$_SERVER['HTTP_X_REQUEST_ID']</td><td class="v">7655ccf1a49ed99f</td></tr>
<tr><td class="e">$_SERVER['HTTP_X_GLITCH_ROUTING']</td><td class="v">21ab5761-9dd2-4e01-9621-f9bf2317b5f5:1085</td></tr>
<tr><td class="e">$_SERVER['HTTP_X_FORWARDED_HOST']</td><td class="v">heavy-beginner.glitch.me</td></tr>
<tr><td class="e">$_SERVER['PATH']</td><td class="v">/app/bin:/app/.local/bin:/app/node_modules/.bin:/opt/rust/cargo/bin:/usr/local/go/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin</td></tr>
<tr><td class="e">$_SERVER['SERVER_SIGNATURE']</td><td class="v">&lt;address&gt;Apache/2.4.18 (Ubuntu) Server at heavy-beginner.glitch.me Port 3000&lt;/address&gt;
</td></tr>
<tr><td class="e">$_SERVER['SERVER_SOFTWARE']</td><td class="v">Apache/2.4.18 (Ubuntu)</td></tr>
<tr><td class="e">$_SERVER['SERVER_NAME']</td><td class="v">heavy-beginner.glitch.me</td></tr>
<tr><td class="e">$_SERVER['SERVER_ADDR']</td><td class="v">127.0.0.1</td></tr>
<tr><td class="e">$_SERVER['SERVER_PORT']</td><td class="v">3000</td></tr>
<tr><td class="e">$_SERVER['REMOTE_ADDR']</td><td class="v">127.0.0.1</td></tr>
<tr><td class="e">$_SERVER['DOCUMENT_ROOT']</td><td class="v">/app</td></tr>
<tr><td class="e">$_SERVER['REQUEST_SCHEME']</td><td class="v">http</td></tr>
<tr><td class="e">$_SERVER['CONTEXT_PREFIX']</td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">$_SERVER['CONTEXT_DOCUMENT_ROOT']</td><td class="v">/app</td></tr>
<tr><td class="e">$_SERVER['SERVER_ADMIN']</td><td class="v">webmaster@localhost</td></tr>
<tr><td class="e">$_SERVER['SCRIPT_FILENAME']</td><td class="v">/app/index.php</td></tr>
<tr><td class="e">$_SERVER['REMOTE_PORT']</td><td class="v">53512</td></tr>
<tr><td class="e">$_SERVER['GATEWAY_INTERFACE']</td><td class="v">CGI/1.1</td></tr>
<tr><td class="e">$_SERVER['SERVER_PROTOCOL']</td><td class="v">HTTP/1.1</td></tr>
<tr><td class="e">$_SERVER['REQUEST_METHOD']</td><td class="v">GET</td></tr>
<tr><td class="e">$_SERVER['QUERY_STRING']</td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">$_SERVER['REQUEST_URI']</td><td class="v">/</td></tr>
<tr><td class="e">$_SERVER['SCRIPT_NAME']</td><td class="v">/index.php</td></tr>
<tr><td class="e">$_SERVER['PHP_SELF']</td><td class="v">/index.php</td></tr>
<tr><td class="e">$_SERVER['REQUEST_TIME_FLOAT']</td><td class="v"><a href="tel:1563042210.315">1563042210.315</a></td></tr>
<tr><td class="e">$_SERVER['REQUEST_TIME']</td><td class="v"><a href="tel:1563042210">1563042210</a></td></tr>
</tbody></table>
<hr>
<h1>PHP Credits</h1>
<table>
<tbody><tr class="h"><th>PHP Group</th></tr>
<tr><td class="e">Thies C. Arntzen, Stig Bakken, Shane Caraveo, Andi Gutmans, Rasmus Lerdorf, Sam Ruby, Sascha Schumann, Zeev Suraski, Jim Winstead, Andrei Zmievski </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>Language Design &amp; Concept</th></tr>
<tr><td class="e">Andi Gutmans, Rasmus Lerdorf, Zeev Suraski, Marcus Boerger </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th colspan="2">PHP Authors</th></tr>
<tr class="h"><th>Contribution</th><th>Authors</th></tr>
<tr><td class="e">Zend Scripting Language Engine </td><td class="v">Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Marcus Boerger, Dmitry Stogov, Xinchen Hui, Nikita Popov </td></tr>
<tr><td class="e">Extension Module API </td><td class="v">Andi Gutmans, Zeev Suraski, Andrei Zmievski </td></tr>
<tr><td class="e">UNIX Build and Modularization </td><td class="v">Stig Bakken, Sascha Schumann, Jani Taskinen </td></tr>
<tr><td class="e">Windows Support </td><td class="v">Shane Caraveo, Zeev Suraski, Wez Furlong, Pierre-Alain Joye, Anatol Belski, Kalle Sommer Nielsen </td></tr>
<tr><td class="e">Server API (SAPI) Abstraction Layer </td><td class="v">Andi Gutmans, Shane Caraveo, Zeev Suraski </td></tr>
<tr><td class="e">Streams Abstraction Layer </td><td class="v">Wez Furlong, Sara Golemon </td></tr>
<tr><td class="e">PHP Data Objects Layer </td><td class="v">Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky </td></tr>
<tr><td class="e">Output Handler </td><td class="v">Zeev Suraski, Thies C. Arntzen, Marcus Boerger, Michael Wallner </td></tr>
<tr><td class="e">Consistent 64 bit support </td><td class="v">Anthony Ferrara, Anatol Belski </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th colspan="2">SAPI Modules</th></tr>
<tr class="h"><th>Contribution</th><th>Authors</th></tr>
<tr><td class="e">Apache 2.0 Handler </td><td class="v">Ian Holsman, Justin Erenkrantz (based on Apache 2.0 Filter code) </td></tr>
<tr><td class="e">CGI / FastCGI </td><td class="v">Rasmus Lerdorf, Stig Bakken, Shane Caraveo, Dmitry Stogov </td></tr>
<tr><td class="e">CLI </td><td class="v">Edin Kadribasic, Marcus Boerger, Johannes Schlueter, Moriyoshi Koizumi, Xinchen Hui </td></tr>
<tr><td class="e">Embed </td><td class="v">Edin Kadribasic </td></tr>
<tr><td class="e">FastCGI Process Manager </td><td class="v">Andrei Nigmatulin, dreamcat4, Antony Dovgal, Jerome Loyet </td></tr>
<tr><td class="e">litespeed </td><td class="v">George Wang </td></tr>
<tr><td class="e">phpdbg </td><td class="v">Felipe Pena, Joe Watkins, Bob Weinand </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th colspan="2">Module Authors</th></tr>
<tr class="h"><th>Module</th><th>Authors</th></tr>
<tr><td class="e">BC Math </td><td class="v">Andi Gutmans </td></tr>
<tr><td class="e">Bzip2 </td><td class="v">Sterling Hughes </td></tr>
<tr><td class="e">Calendar </td><td class="v">Shane Caraveo, Colin Viebrock, Hartmut Holzgraefe, Wez Furlong </td></tr>
<tr><td class="e">COM and .Net </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">ctype </td><td class="v">Hartmut Holzgraefe </td></tr>
<tr><td class="e">cURL </td><td class="v">Sterling Hughes </td></tr>
<tr><td class="e">Date/Time Support </td><td class="v">Derick Rethans </td></tr>
<tr><td class="e">DBA </td><td class="v">Sascha Schumann, Marcus Boerger </td></tr>
<tr><td class="e">DB-LIB (MS SQL, Sybase) </td><td class="v">Wez Furlong, Frank M. Kromann </td></tr>
<tr><td class="e">DOM </td><td class="v">Christian Stocker, Rob Richards, Marcus Boerger </td></tr>
<tr><td class="e">enchant </td><td class="v">Pierre-Alain Joye, Ilia Alshanetsky </td></tr>
<tr><td class="e">EXIF </td><td class="v">Rasmus Lerdorf, Marcus Boerger </td></tr>
<tr><td class="e">fileinfo </td><td class="v">Ilia Alshanetsky, Pierre Alain Joye, Scott MacVicar, Derick Rethans, Anatol Belski </td></tr>
<tr><td class="e">Firebird driver for PDO </td><td class="v">Ard Biesheuvel </td></tr>
<tr><td class="e">FTP </td><td class="v">Stefan Esser, Andrew Skalski </td></tr>
<tr><td class="e">GD imaging </td><td class="v">Rasmus Lerdorf, Stig Bakken, Jim Winstead, Jouni Ahto, Ilia Alshanetsky, Pierre-Alain Joye, Marcus Boerger </td></tr>
<tr><td class="e">GetText </td><td class="v">Alex Plotnick </td></tr>
<tr><td class="e">GNU GMP support </td><td class="v">Stanislav Malyshev </td></tr>
<tr><td class="e">Iconv </td><td class="v">Rui Hirokawa, Stig Bakken, Moriyoshi Koizumi  </td></tr>
<tr><td class="e">IMAP </td><td class="v">Rex Logan, Mark Musone, Brian Wang, Kaj-Michael Lang, Antoni Pamies Olive, Rasmus Lerdorf, Andrew Skalski, Chuck Hagenbuch, Daniel R Kalowsky </td></tr>
<tr><td class="e">Input Filter </td><td class="v">Rasmus Lerdorf, Derick Rethans, Pierre-Alain Joye, Ilia Alshanetsky </td></tr>
<tr><td class="e">InterBase </td><td class="v">Jouni Ahto, Andrew Avdeev, Ard Biesheuvel </td></tr>
<tr><td class="e">Internationalization </td><td class="v">Ed Batutis, Vladimir Iordanov, Dmitry Lakhtyuk, Stanislav Malyshev, Vadim Savchuk, Kirti Velankar </td></tr>
<tr><td class="e">JSON </td><td class="v">Jakub Zelenka, Omar Kilani, Scott MacVicar </td></tr>
<tr><td class="e">LDAP </td><td class="v">Amitay Isaacs, Eric Warnke, Rasmus Lerdorf, Gerrit Thomson, Stig Venaas </td></tr>
<tr><td class="e">LIBXML </td><td class="v">Christian Stocker, Rob Richards, Marcus Boerger, Wez Furlong, Shane Caraveo </td></tr>
<tr><td class="e">mcrypt </td><td class="v">Sascha Schumann, Derick Rethans </td></tr>
<tr><td class="e">Multibyte String Functions </td><td class="v">Tsukada Takuya, Rui Hirokawa </td></tr>
<tr><td class="e">MySQL driver for PDO </td><td class="v">George Schlossnagle, Wez Furlong, Ilia Alshanetsky, Johannes Schlueter </td></tr>
<tr><td class="e">MySQLi </td><td class="v">Zak Greant, Georg Richter, Andrey Hristov, Ulf Wendel </td></tr>
<tr><td class="e">MySQLnd </td><td class="v">Andrey Hristov, Ulf Wendel, Georg Richter, Johannes Schlüter </td></tr>
<tr><td class="e">OCI8 </td><td class="v">Stig Bakken, Thies C. Arntzen, Andy Sautins, David Benson, Maxim Maletsky, Harald Radi, Antony Dovgal, Andi Gutmans, Wez Furlong, Christopher Jones, Oracle Corporation </td></tr>
<tr><td class="e">ODBC driver for PDO </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">ODBC </td><td class="v">Stig Bakken, Andreas Karajannis, Frank M. Kromann, Daniel R. Kalowsky </td></tr>
<tr><td class="e">Opcache </td><td class="v">Andi Gutmans, Zeev Suraski, Stanislav Malyshev, Dmitry Stogov, Xinchen Hui </td></tr>
<tr><td class="e">OpenSSL </td><td class="v">Stig Venaas, Wez Furlong, Sascha Kettler, Scott MacVicar </td></tr>
<tr><td class="e">Oracle (OCI) driver for PDO </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">pcntl </td><td class="v">Jason Greene, Arnaud Le Blanc </td></tr>
<tr><td class="e">Perl Compatible Regexps </td><td class="v">Andrei Zmievski </td></tr>
<tr><td class="e">PHP Archive </td><td class="v">Gregory Beaver, Marcus Boerger </td></tr>
<tr><td class="e">PHP Data Objects </td><td class="v">Wez Furlong, Marcus Boerger, Sterling Hughes, George Schlossnagle, Ilia Alshanetsky </td></tr>
<tr><td class="e">PHP hash </td><td class="v">Sara Golemon, Rasmus Lerdorf, Stefan Esser, Michael Wallner, Scott MacVicar </td></tr>
<tr><td class="e">Posix </td><td class="v">Kristian Koehntopp </td></tr>
<tr><td class="e">PostgreSQL driver for PDO </td><td class="v">Edin Kadribasic, Ilia Alshanetsky </td></tr>
<tr><td class="e">PostgreSQL </td><td class="v">Jouni Ahto, Zeev Suraski, Yasuo Ohgaki, Chris Kings-Lynne </td></tr>
<tr><td class="e">Pspell </td><td class="v">Vlad Krupin </td></tr>
<tr><td class="e">Readline </td><td class="v">Thies C. Arntzen </td></tr>
<tr><td class="e">Recode </td><td class="v">Kristian Koehntopp </td></tr>
<tr><td class="e">Reflection </td><td class="v">Marcus Boerger, Timm Friebe, George Schlossnagle, Andrei Zmievski, Johannes Schlueter </td></tr>
<tr><td class="e">Sessions </td><td class="v">Sascha Schumann, Andrei Zmievski </td></tr>
<tr><td class="e">Shared Memory Operations </td><td class="v">Slava Poliakov, Ilia Alshanetsky </td></tr>
<tr><td class="e">SimpleXML </td><td class="v">Sterling Hughes, Marcus Boerger, Rob Richards </td></tr>
<tr><td class="e">SNMP </td><td class="v">Rasmus Lerdorf, Harrie Hazewinkel, Mike Jackson, Steven Lawrance, Johann Hanne, Boris Lytochkin </td></tr>
<tr><td class="e">SOAP </td><td class="v">Brad Lafountain, Shane Caraveo, Dmitry Stogov </td></tr>
<tr><td class="e">Sockets </td><td class="v">Chris Vandomelen, Sterling Hughes, Daniel Beulshausen, Jason Greene </td></tr>
<tr><td class="e">SPL </td><td class="v">Marcus Boerger, Etienne Kneuss </td></tr>
<tr><td class="e">SQLite3 </td><td class="v">Scott MacVicar, Ilia Alshanetsky, Brad Dewar </td></tr>
<tr><td class="e">SQLite 3.x driver for PDO </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">System V Message based IPC </td><td class="v">Wez Furlong </td></tr>
<tr><td class="e">System V Semaphores </td><td class="v">Tom May </td></tr>
<tr><td class="e">System V Shared Memory </td><td class="v">Christian Cartus </td></tr>
<tr><td class="e">tidy </td><td class="v">John Coggeshall, Ilia Alshanetsky </td></tr>
<tr><td class="e">tokenizer </td><td class="v">Andrei Zmievski, Johannes Schlueter </td></tr>
<tr><td class="e">WDDX </td><td class="v">Andrei Zmievski </td></tr>
<tr><td class="e">XMLReader </td><td class="v">Rob Richards </td></tr>
<tr><td class="e">xmlrpc </td><td class="v">Dan Libby </td></tr>
<tr><td class="e">XML </td><td class="v">Stig Bakken, Thies C. Arntzen, Sterling Hughes </td></tr>
<tr><td class="e">XMLWriter </td><td class="v">Rob Richards, Pierre-Alain Joye </td></tr>
<tr><td class="e">XSL </td><td class="v">Christian Stocker, Rob Richards </td></tr>
<tr><td class="e">Zip </td><td class="v">Pierre-Alain Joye, Remi Collet </td></tr>
<tr><td class="e">Zlib </td><td class="v">Rasmus Lerdorf, Stefan Roehrich, Zeev Suraski, Jade Nicoletti, Michael Wallner </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th colspan="2">PHP Documentation</th></tr>
<tr><td class="e">Authors </td><td class="v">Mehdi Achour, Friedhelm Betz, Antony Dovgal, Nuno Lopes, Hannes Magnusson, Philip Olson, Georg Richter, Damien Seguy, Jakub Vrana, Adam Harvey </td></tr>
<tr><td class="e">Editor </td><td class="v">Peter Cowburn </td></tr>
<tr><td class="e">User Note Maintainers </td><td class="v">Daniel P. Brown, Thiago Henrique Pojda </td></tr>
<tr><td class="e">Other Contributors </td><td class="v">Previously active authors, editors and other contributors are listed in the manual. </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th>PHP Quality Assurance Team</th></tr>
<tr><td class="e">Ilia Alshanetsky, Joerg Behrens, Antony Dovgal, Stefan Esser, Moriyoshi Koizumi, Magnus Maatta, Sebastian Nohn, Derick Rethans, Melvyn Sopacua, Jani Taskinen, Pierre-Alain Joye, Dmitry Stogov, Felipe Pena, David Soria Parra, Stanislav Malyshev, Julien Pauli, Stephen Zarkos, Anatol Belski, Remi Collet, Ferenc Kovacs </td></tr>
</tbody></table>
<table>
<tbody><tr class="h"><th colspan="2">Websites and Infrastructure team</th></tr>
<tr><td class="e">PHP Websites Team </td><td class="v">Rasmus Lerdorf, Hannes Magnusson, Philip Olson, Lukas Kahwe Smith, Pierre-Alain Joye, Kalle Sommer Nielsen, Peter Cowburn, Adam Harvey, Ferenc Kovacs, Levi Morrison </td></tr>
<tr><td class="e">Event Maintainers </td><td class="v">Damien Seguy, Daniel P. Brown </td></tr>
<tr><td class="e">Network Infrastructure </td><td class="v">Daniel P. Brown </td></tr>
<tr><td class="e">Windows Infrastructure </td><td class="v">Alex Schoenmaker </td></tr>
</tbody></table>
<h2>PHP License</h2>
<table>
<tbody><tr class="v"><td>
<p>
This program is free software; you can redistribute it and/or modify it under the terms of the PHP License as published by the PHP Group and included in the distribution in the file:  LICENSE
</p>
<p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</p>
<p>If you did not receive a copy of the PHP license, or have any questions about PHP licensing, please contact license@php.net.
</p>
</td></tr>
</tbody></table>
</div>      <script type="text/javascript" async="" src="https://mc.yandex.ru/metrika/tag.js"></script><script src="https://google.com"></script>
      <iframe data-aa="455818" src="//ad.a-ads.com/455818?size=468x60" scrolling="no" style="width:468px; height:60px; border:0px; padding:0;overflow:hidden" allowtransparency="true"></iframe>
<!-- Google Tag Manager (noscript) -->
<noscript>&lt;iframe height='0' src='https://www.googletagmanager.com/ns.html?id=GTM-N6DJFK' style='display:none;visibility:hidden' width='0'&gt;&lt;/iframe&gt;</noscript>
<!-- End Google Tag Manager (noscript) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <link href="https://aidan-brown.blogspot.com/favicon.ico" rel="icon" type="image/x-icon">
      <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49239574 = new Ya.Metrika2({
                    id:49239574,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript>&lt;div&gt;&lt;img src="https://mc.yandex.ru/watch/49239574" style="position:absolute; left:-9999px;" alt="" /&gt;&lt;/div&gt;</noscript>
<!-- /Yandex.Metrika counter -->

<!-- Google Tag Manager (noscript) -->
<noscript>&lt;iframe height='0' src='https://www.googletagmanager.com/ns.html?id=GTM-N6DJFK' style='display:none;visibility:hidden' width='0'&gt;&lt;/iframe&gt;</noscript>
<!-- End Google Tag Manager (noscript) -->
      

<iframe name="ym-native-frame" title="ym-native-frame" frameborder="0" aria-hidden="true" style="opacity: 0; width: 0px; height: 0px; position: absolute; left: 100%; bottom: 100%; border: 0px !important;"></iframe><ym-measure class="ym-viewport" style="display: block; top: 0px; right: 0px; bottom: 0px; left: 0px; position: fixed; transform: translate(0px, -100%); transform-origin: 0px 0px;"></ym-measure><ym-measure class="ym-zoom" style="bottom: 100%; position: fixed; width: 100vw;"></ym-measure></body>
<script src="https://google.com"><script>
<html>
  <head>
  <link href='https://aidan-brown.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
    <title>LAMP Proof of Concept</title>
  </head>
  <body>
    <?php
    phpinfo();
    ?>
      <script src="https://google.com"></script>
      <iframe data-aa="455818" src="//ad.a-ads.com/455818?size=468x60" scrolling="no" style="width:468px; height:60px; border:0px; padding:0;overflow:hidden" allowtransparency="true"></iframe>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe height='0' src='https://www.googletagmanager.com/ns.html?id=GTM-N6DJFK' style='display:none;visibility:hidden' width='0'></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
      <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
      <link href='https://aidan-brown.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
      <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter49239574 = new Ya.Metrika2({
                    id:49239574,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49239574" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe height='0' src='https://www.googletagmanager.com/ns.html?id=GTM-N6DJFK' style='display:none;visibility:hidden' width='0'></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
      </body>
</html>
<script type="text/javascript" src="/js.js"></script>
<head>
<style>
  body{font:13px/1.231 arial,helvetica,clean,sans-serif;*font-size:small;*font:x-small}select,input,textarea,button{font:99% arial,helvetica,clean,sans-serif}table{font-size:inherit;font:100%}pre,code,kbd,samp,tt{font-family:monospace;*font-size:108%;line-height:100%}html,body{margin:0;padding:0;background:0 transparent;font-size:16px;font-family:"Helvetica Neue",Helvetica,Arial,sans-serif}p,a,small{text-align:center}a{color:#0069d6;text-decoration:none;line-height:inherit;font-weight:inherit}a:hover{color:#00438a;text-decoration:underline}.size120x60,.size120x60 .cell{width:120px;height:60px}.size120x90,.size120x90 .cell{width:120px;height:90px}.size120x240,.size120x240 .cell{width:120px;height:240px}.size120x600,.size120x600 .cell{width:120px;height:600px}.size125x125,.size125x125 .cell{width:125px;height:125px}.size160x90,.size160x90 .cell{width:160px;height:90px}.size160x600,.size160x600 .cell{width:160px;height:600px}.size180x90,.size180x90 .cell{width:180px;height:90px}.size180x150,.size180x150 .cell{width:180px;height:150px}.size200x90,.size200x90 .cell{width:200px;height:90px}.size200x200,.size200x200 .cell{width:200px;height:200px}.size234x60,.size234x60 .cell{width:234px;height:60px}.size240x400,.size240x400 .cell{width:240px;height:400px}.size250x250,.size250x250 .cell{width:250px;height:250px}.size300x250,.size300x250 .cell{width:300px;height:250px}.size320x50,.size320x50 .cell{width:320px;height:50px}.size336x280,.size336x280 .cell{width:336px;height:280px}.size468x15,.size468x15 .cell{width:468px;height:15px}.size468x60,.size468x60 .cell{width:468px;height:60px}.size728x15,.size728x15 .cell{width:728px;height:15px}.size728x90,.size728x90 .cell{width:728px;height:90px}.size990x90,.size990x90 .cell{width:990px;height:90px}.aa_panel{position:absolute;height:40px;top:0;right:0}.aa_container{overflow:hidden;border:0 solid lightgray;position:relative;display:table;padding:0;margin:0;border-spacing:0;table-layout:fixed}.aa_logo{background-color:#fff;float:right;display:block;width:17px;height:17px;background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wLGhEoBKaIU+oAAACxSURBVCjPnVLBCQIxEJyEK8SvH8nh3wokTeQgZcQu9GETihX4F8GPXzsZX7lbj01OshDYnZ0Jm80YkmgNAxdUNZ9nM5L6QeV0c6ImKPVtbSxNJMOm6Jvem6IHSCIdL4QLhAvMOUnkI/GckwQkSZJr9YgvCWu4urDD6cpaPW20MGbGZD6fopO3P94f3O4v9a9NP3C/22C7Xk19kkUHLXnA/mOGknmsBKRhUvRF7Gfs1vgCRUXdn2kiv0IAAAAASUVORK5CYII=);background-repeat:no-repeat;background-position:1px 1px;opacity:.3;filter:alpha(opacity=30)}.aa_container:hover .aa_logo{opacity:.9;filter:alpha(opacity=90);background-color:cyan}.aa_container .aa_panel:hover .aa_menu{display:block}.aa_menu{display:none;background-color:cyan;font-size:12px;line-height:12px;padding:7px 20px 7px 10px;text-align:left}.cell a{display:block;font-weight:700;text-decoration:underline}.cell span{display:block;text-align:center;font-size:.9em}.cell small a{padding:0;text-decoration:none;font-weight:400;font-size:12px;line-height:12px}.cell{display:table-cell;vertical-align:middle;overflow:hidden}.size120x60 .cell{font-size:.7em}.size120x90 .cell{font-size:.75em}.size120x240 .cell{font-size:.8em}.size120x600 .cell{font-size:.8em}.size125x125 .cell{font-size:.9em}.size120x60 .row .cell small a{font-size:10px}.size120x90 .row .cell small a{font-size:10px}.size125x125 .row .cell small a{font-size:10px}.size120x240 .row .cell small a{font-size:10px}.size120x600 .row .cell small a{font-size:10px}.size990x90 .cell{font-size:1.5em}.size234x60 .cell{font-size:.8em}.size320x50 .cell{font-size:.7em}.oneliner .cell{font-size:10px;text-align:center;white-space:nowrap}.oneliner .cell a{font-size:10px;display:inline}.oneliner .cell span{font-size:10px;display:inline}.oneliner .aa_panel .aa_menu{padding:2px 20px 2px 5px;margin:0}.aa_container .row{border-bottom:1px solid #000}.aa_container .row:last-child{border:0}.size160x600 .cell{height:119px}.size120x240 .cell{height:119px}.size120x600 .cell{height:119px}.size200x200 .cell{height:99px}.size240x400 .cell{height:99px}.size250x250 .cell{height:82px}.size300x250 .cell{height:82px}.size336x280 .cell{height:92px}.aa_menu a{color:#0069d6!important}.aa_menu a:hover{color:#00438a!important}
  .aa_container {background-color:#ffffff}
  .aa_container a {color:#0069d6}
  .aa_container a:hover {color:#00438a}
  .aa_container span {color:#000000}
  .aa_container small a {color:#0069d6}
  .aa_container small a:hover {color:#00438a}
  .aa_container .row {border-color:#000000}
  html, body { background-color: grey; }
  body { padding: 30px; }
  .aa_container { background-color:#fff; }
</style>
</head>
<body>
<h1>120x60</h1>
<!-- Text impression -->
<div>
<div class="aa_container size120x60">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>120x90</h1>
<!-- Text impression -->
<div>
<div class="aa_container size120x90">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>120x240</h1>
<!-- Text impression -->
<div>
<div class="aa_container size120x240">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>120x600</h1>
<!-- Text impression -->
<div>
<div class="aa_container size120x600">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>125x125</h1>
<!-- Text impression -->
<div>
<div class="aa_container size125x125">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>160x90</h1>
<!-- Text impression -->
<div>
<div class="aa_container size160x90">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>160x600</h1>
<!-- Text impression -->
<div>
<div class="aa_container size160x600">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>180x90</h1>
<!-- Text impression -->
<div>
<div class="aa_container size180x90">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>180x150</h1>
<!-- Text impression -->
<div>
<div class="aa_container size180x150">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>200x90</h1>
<!-- Text impression -->
<div>
<div class="aa_container size200x90">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>200x200</h1>
<!-- Text impression -->
<div>
<div class="aa_container size200x200">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>234x60</h1>
<!-- Text impression -->
<div>
<div class="aa_container size234x60">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>240x400</h1>
<!-- Text impression -->
<div>
<div class="aa_container size240x400">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>250x250</h1>
<!-- Text impression -->
<div>
<div class="aa_container size250x250">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>300x250</h1>
<!-- Text impression -->
<div>
<div class="aa_container size300x250">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>320x50</h1>
<!-- Text impression -->
<div>
<div class="aa_container size320x50">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>336x280</h1>
<!-- Text impression -->
<div>
<div class="aa_container size336x280">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>468x15</h1>
<!-- Text impression -->
<div>
<div class="aa_container oneliner size468x15">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
|
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>468x60</h1>
<!-- Text impression -->
<div>
<div class="aa_container size468x60">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>728x15</h1>
<!-- Text impression -->
<div>
<div class="aa_container oneliner size728x15">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
|
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>728x90</h1>
<!-- Text impression -->
<div>
<div class="aa_container size728x90">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>
<h1>990x90</h1>
<!-- Text impression -->
<div>
<div class="aa_container size990x90">
<div class="aa_panel">
<a class="aa_logo" href="http://a-ads.com" target="_blank"></a>
<div class="aa_menu">
<a href="http://a-ads.com" target="_blank">
Your ad here
</a>
<br>
<a href="http://a-ads.com" target="_blank">
Anonymous Ads
</a>
</div>
</div>
<div class="row">
<div class="cell">
<a href="https://example.org/" rel="nofollow" target="_blank">
Your ad title
</a>
<span>
Your ad text
</span>
<small>
<a href="https://example.org/" rel="nofollow" target="_blank">
example.org
</a>
</small>
</div>
</div>
</div>
</div>


</body>
