<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductDocumentsController extends Controller
{
    
     /**
     * @param $cat_slug
     *
     * @return string
     */
    public function getProductSpecyfication($cat_slug)
    {
        
       
        if (in_array($cat_slug, ['chairs', 'stools', 'benches', 'cluster-beam-seating'])) {
           return 'files/Master Seating technical specyfication.pdf';
        }

        if (in_array($cat_slug, ['lounge'])) {
            return 'files/MASTER Lounge technical specyfication.pdf';
        }

        if (in_array($cat_slug, ['complete-tables', 'table-tops', 'table-bases'])) {
            return 'files/MASTER Table technical specyfication.pdf';
        }

        if (in_array($cat_slug, ['lighted-furniture'])) {
            return 'files/MASTER Light technical specyfication.pdf';
        }

        return response('unexptected type', 200);
    }
    
    /**
     * @param $cat_slug
     *
     * @return string
     */
    public function getProductOverview($cat_slug)
    {
        if (in_array($cat_slug, ['chairs', 'stools', 'benches', 'cluster-beam-seating'])) {
           return 'files/MASTER Seating RGB web HighQ.pdf';
        }

        if (in_array($cat_slug, ['lounge'])) {
            return 'files/MASTER Lounge RGB web HighQ.pdf';
        }

        if (in_array($cat_slug, ['complete-tables', 'table-tops', 'table-bases'])) {
            return 'files/MASTER Table RGB web HighQ.pdf';
        }

        if (in_array($cat_slug, ['lighted-furniture'])) {
            return 'files/MASTER Light RGB web HighQ.pdf';
        }

        return response('unexptected type', 200);
    }

    /**
     * @param $cat_slug
     *
     * @return string
     */
    public function getProductCatalog($cat_slug)
    {
        if (in_array($cat_slug, ['accessories'])) {
            return 'files/Accessories_catalogo_WEB.pdf';
        }

        if (in_array($cat_slug, ['benches'])) {
            return 'files/Benches_catalogo_WEB.pdf';
        }

        if (in_array($cat_slug, ['chairs'])) {
            return 'files/Chairs_catalogo_WEB.pdf';
        }

        if (in_array($cat_slug, ['lighted-furniture'])) {
            return 'files/LightedF_catalogo_WEB.pdf';
        }

        if (in_array($cat_slug, ['cluster-beam-seating'])) {
            return 'files/ClusterB_catalogo_WEB.pdf';
        }

        if (in_array($cat_slug, ['lighting'])) {
            return 'files/Lighting_catalogo_WEB.pdf';
        }

        if (in_array($cat_slug, ['lounge'])) {
            return 'files/Lounge_catalogo_WEB.pdf';
        }

        if (in_array($cat_slug, ['stools'])) {
            return 'files/Stools_catalogo_WEB.pdf';
        }

        if (in_array($cat_slug, ['storage'])) {
            return 'files/Storages_catalogo_WEB.pdf';
        }

        if (in_array($cat_slug, ['table-bases', 'table-tops'])) {
            return 'files/Tables_catalogo_WEB.pdf';
        }

        return response('unexptected type', 200);
    }
}
