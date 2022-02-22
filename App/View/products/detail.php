<h3>Thêm mặt hàng</h3>
<table>
    <tr>
        <td><label>Tên hàng :</label></td>
        <td><input type="text"></td>
    </tr>
    <tr>
        <td><label>Loại hàng :</label></td>
        <td><select name="category_id" id="">
                <?php foreach ($categoriess as $category): ?>
                    <option value="<?php echo $category->id ?>"><?php echo $category->name?></option>
                <?php endforeach; ?>
            </select></td>
    </tr>
    <tr>
        <td><label>Giá :</label></td>
        <td><input type="text" name="price" value="<?php echo $products->name ?>"></td>
    </tr>
    <tr>
        <td><label>Số lượng :</label></td>
        <td><input type="text" value="<?php echo $products->name ?>></td>
    </tr>
    <tr>
        <td><label>Mô tả :</label></td>
        <td><textarea name=" description" value="<?php echo $products->name?>></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td>
            <button>Nhập mặt hàng</button>
            <button>Thoát</button>
        </td>
    </tr>
</table>

