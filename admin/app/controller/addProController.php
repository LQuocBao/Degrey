<?php
class AddProductController
{
    private $product;
    private $data;
    private $category;

    function __construct()
    {
        $this->product = new ProductModel();
        $this->category = new CategoryModel();
    }
    public function renderView($view, $data)
    {
        $view = './app/view/' . $view . '.php';
        require_once $view;
    }
    function viewPro()
    {
        $this->data['listpro'] = $this->product->getPro(0);
        $this->renderView('product', $this->data);
    }
    function viewAdd()
    {
        $this->data['listcate'] = $this->category->getCate();
        $this->renderView('addpro', $this->data);
    }

    function addPro()
    {
        if (isset($_POST['submit'])) {
            $data = [];
            $data['id_category'] = $_POST['id_category'];
            $data['name_product'] = $_POST['name'];
            $data['image'] = $_FILES['image']['name'];
            $data['price_product'] = $_POST['price'];
            $file = '../public/upload/' . $data['image'];
            move_uploaded_file($_FILES['image']['tmp_name'], $file);
            $this->product->insertPro($data);
        }
        // header('location: index.php?page=product');
        echo '<script>alert("Đã thêm sản phẩm thành công")</script>';
        echo '<script>location.href="index.php?page=product";</script>';
    }

    function delPro()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $data = $this->product->getIdPro($id);
            $file = '../public/upload/' . $data['image'];
            unlink($file);
            $this->product->deletePro($id);
        }
        echo '<script>location.href="index.php?page=product";</script>';
    }
    function viewEdit()
    {
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $this->data['listcate'] = $this->category->getCate();
            $this->data['pro_detail'] = $this->product->getIdPro($id);
            $this->renderView('editpro', $this->data);
        }
        $this->renderView('editpro', $this->data);
    }

    function editPro()
    {
        if (isset($_POST['submit'])) {
            $data = [];
            $data['id_category'] = $_POST['id_category'];
            $data['name_product'] = $_POST['name'];
            $data['image'] = $_FILES['image']['name'];
            $data['price_product'] = $_POST['price'];
            $data['id_product'] = $_POST['idpro'];
            $data['image_old'] = $_POST['image_old'];
            if ($data['image'] == '') {
                $data['image'] = $data['image_old'];
            } else {
                $file = '../public/upload/' . $data['image'];
                move_uploaded_file($_FILES['image']['tmp_name'], $file);
                $file_old = '../public/upload/' . $data['image_old'];
                unlink($file_old);
            }
            $this->product->updatePro($data);
            echo '<script>alert("Cập nhật thành công")</script>';
            echo '<script>location.href="index.php?page=product"</script>';
        }
    }
    // function viewCate()
    // {
    //     $this->renderView('category', $this->data);
    // }
}
