<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <!--  created with Free Online Sitemap Generator www.xml-sitemaps.com  -->

    @foreach ($posts as $post)
        <url>
            <loc>https://getessayservice.com/blog/{{ $post->slug }}</loc>
            <lastmod><?php echo dateFormat($post->updated_at); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>.80</priority>
        </url>
    @endforeach

</urlset>

<?php
function dateFormat($date)
{
    $lastmod = $date; //MySQL datetime format
    $datetime = new DateTime($lastmod);
    $result = $datetime->format('Y-m-d\TH:i:sP');
    return $result;
}
?>
