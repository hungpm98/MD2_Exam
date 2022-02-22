<div class="container mt-4">
    <h1 class="text-center">Danh sách mặt hàng</h1>
    <div class="row">
        <div class="col-9">
            <form class="form-inline my-2 my-lg-0">
                <h5>Nhập tên hàng: </h5>
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="col-3">
            <a type="button" class="btn btn-success" href="index.php?page=product-create">Thêm mặt hàng</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên hàng</th>
                <th scope="col">Loại hàng</th>
                <th scope="col" colspan="2"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <th scope="row"><?php echo $product->id ?></th>
                    <td><?php echo $product->pdname ?></td>
                    <td><?php echo $product->ctname ?></td>
                    <td><a href="index.php?page=product-update&id=<?php echo $product->id ?>">Chỉnh sửa</a></td>
                    <td><a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="index.php?page=product-delete&id=<?php echo $product->id?>">Xóa</a></td>


                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
