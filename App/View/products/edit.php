<h3>Sửa mặt hàng</h3>
<form action=""method="post">
    <table>
        <tr>
            <td><label>Tên hàng :</label></td>
            <td><input type="text" name="name" value="<?php echo $products->pdname?>"></td>
        </tr>
        <tr>
            <td><label>Loại hàng :</label></td>
            <td><select name="category_id" id="">
                    <?php foreach ($categoriess as $category ):?>
                        <option value="<?php echo $category->id ?>"><?php echo $category->name?></option>
                    <?php endforeach; ?>
                </select></td>
        </tr>
        <tr>
            <td><label>Giá :</label></td>
            <td><input type="text" name="price" value="<?php echo $products->price?>"></td>
        </tr>
        <tr>
            <td><label>Số lượng :</label></td>
            <td><input type="text" name="quantity" value="<?php echo $products->quantity?>"></td>
        </tr>
        <tr>
            <td><label>Mô tả :</label></td>
            <td><textarea name="description" ><?php echo $products->description?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button>Nhập mặt hàng</button>
                <a href="index.php?page=product-list">Thoát</a></td>
        </tr>
    </table>

</form>

