<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <!--  created with Free Online Sitemap Generator www.xml-sitemaps.com  -->

    @foreach ($menus as $key => $menu)
        @if ($menu->subMenus->count() > 0)
            @foreach ($menu->subMenus as $subMenu)
                @if ($subMenu->subMenus->count() > 0)
                    @foreach ($subMenu->subMenus as $subChlid)
                        @if ($subChlid->subMenus->count() > 0)
                            @foreach ($subChlid->subMenus as $subChlidSub)
                                @if ($subChlidSub->content)
                                    <url>
                                        <loc>{{ url($subChlidSub->slug) }}</loc>
                                        <lastmod><?php echo dateFormat($subChlidSub->updated_at); ?></lastmod>
                                        <changefreq>daily</changefreq>
                                        <priority>.80</priority>
                                    </url>
                                @endif
                            @endforeach
                        @else
                            @if ($subChlid->content)
                                <url>
                                    <loc>{{ url($subChlid->slug) }}</loc>
                                    <lastmod><?php echo dateFormat($subChlid->updated_at); ?></lastmod>
                                    <changefreq>daily</changefreq>
                                    <priority>.80</priority>
                                </url>
                            @endif
                        @endif
                    @endforeach
                @else
                    <url>
                        <loc>{{ url($subMenu->slug) }}</loc>
                        <lastmod><?php echo dateFormat($subMenu->updated_at); ?></lastmod>
                        <changefreq>daily</changefreq>
                        <priority>.80</priority>
                    </url>
                @endif
            @endforeach
        @else
            <url>
                <loc>{{ url($menu->slug) }}</loc>
                <lastmod><?php echo dateFormat($menu->updated_at); ?></lastmod>
                <changefreq>daily</changefreq>
                <priority>.80</priority>
            </url>
        @endif
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
