<?php
class AddCateController
{
    private $data;
    private $category;
    private $product;
    function __construct()
    {
        $this->category = new CategoryModel();
        $this->product = new ProductModel();
    }

    function renderView($view, $data = null)
    {
        $view = './app/view/' . $view . '.php';
        require_once $view;
    }

    function viewCate()
    {
        $this->data = $this->category->getCate();
        $this->renderView('category', $this->data);
    }

    function viewAdd()
    {
        $this->renderView('addcate');
    }

    public function addCate()
    {
        if (isset($_POST['submit'])) {
            $data = [];
            $data['type'] = $_POST['type'];
            $this->category->insertCate($data);
        }
        echo '<script>alert("Đã thêm danh mục thành công")</script>';
        echo '<script>location.href="index.php?page=category"</script>';
    }

    function delCate()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $data = $this->product->get_all_pro_cate($id);
            if (count($data) > 0) {
                echo '<script>alert("Không thể xóa danh mục này")</script>';
                echo '<script>location.href="index.php?page=category"</script>';
            } else {
                $data = $this->category->getIdCate($id);
                $this->category->deleteCate($id);
                echo '<script>alert("Đã xóa danh mục thành công")</script>';
                echo '<script>location.href="index.php?page=category"</script>';
            }
        }
    }

    function viewEditCate()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $this->data['type'] = $this->category->getIdCate($id);
            $this->renderView('editcate', $this->data);
        }
    }

    function updateCate()
    {
        if (isset($_POST['submit'])) {
            $data = [];
            $data['id_category'] = $_POST['idcate'];
            $data['type'] = $_POST['type'];
            $this->category->upCate($data);
            echo '<script>alert("Đã sửa danh mục thành công")</script>';
            echo '<script>location.href="index.php?page=category"</script>';
        }
    }
}
