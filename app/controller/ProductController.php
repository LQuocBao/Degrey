<?php
class ProductController
{
    private $category;
    private $product;
    private $data;

    function __construct()
    {
        $this->category = new CategoryModel();
        $this->product = new ProductModel();
    }
    
    public function view($data)
    {
        require_once 'app/view/product.php';
    }

    public function viewProduct()
    {
        $this->data['category'] = $this->category->getCate();
        $this->data['product'] = $this->product->getPro();
        $this->view($this->data);
    }

    public function renderView($data, $views)
    {
        $views = 'app/view/' . $views . '.php';
        require_once $views;
    }
    public function detail()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        } else {
            $id = 0;
        }
        $this->data['idcate'] = $this->product->getIdCate($id); //
        $result = $this->product->getIdCate($id);
        $this->data['related-product'] = $this->product->getProCate($result['id_category'], $id);
        $spct = $this->product->getIdPro($id);
        if (is_array($spct)) {
            $this->data['detail'] = $spct;
            $this->renderView($this->data, 'detail');
        } else {
            echo "Not found....";
        }
    }

    function viewProCate()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $this->data['cate'] = $this->category->getIdCate($id);
            $this->data['procate'] = $this->product->get_all_pro_cate($id);
            $this->data['namecate'] = $this->category->getNameCate($id);
            $this->renderView($this->data, 'procate');
        }
    }
}
