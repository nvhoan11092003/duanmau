<?php 
    $listdm = loadall_loaihang();
?>
<h1 class="text-3xl my-3"> Danh Sách Loại Hàng </h1>
<table class="text-lg table-fixed border-2 border-slate-500 w-full">
    <thead>
        <tr class=" border-b-2 border-slate-500">
            <th></th>
            <th class="text-start">ID</th>
            <th class="text-start">NAME</th>
            <th class="text-start">THAO TÁC</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listdm as $key => $value): ?>
            <tr class="border  border-b-2 border-slate-500 ">
                <td><input type="checkbox" name="" id=""></td>
                <td><?=$value['ma_loai']?></td>
                <td><?=$value['ten_loai']?></td>
                <td><a href="index.php?act=suadm&id=<?= $value['ma_loai'] ?>"><input type="button" value="sửa"      class="w-[100px] h-[30px] text-white bg-yellow-500 hover:bg-yellow-700 active:bg-blue-500 border-gray-600 text-lg border rounded-md m-1 "></a>
                <a href="danhmuc/xoa.php?id=<?= $value['ma_loai'] ?>"><input type="button" value="xóa" onclick="return confirm('Bạn có muốn xoá không?')"     class="w-[100px] h-[30px] text-white bg-red-500 hover:bg-red-700 active:bg-blue-500 border-gray-600 text-lg border rounded-md m-1 "></a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<div class="">
    <input type="button" value="Chọn Tất Cả"     class="max-w-[400px]  px-2 h-[35px] text-white  bg-blue-500 hover:bg-blue-700 active:bg-red-500 border-gray-600 text-lg border rounded-md m-1 ">
    <input type="button" value="Bỏ Chọn Tất cả"     class="max-w-[400px]  px-2 h-[35px] text-white  bg-blue-500 hover:bg-blue-700 active:bg-red-500 border-gray-600 text-lg border rounded-md m-1 ">
    <input type="button" value="Xóa Các Mục Đã Chọn"     class="max-w-[400px]  px-2 h-[35px] text-white bg-red-500 hover:bg-red-700 active:bg-blue-500 border-gray-600 text-lg border rounded-md m-1 ">
    <a href="index.php?act=adddm"><input type="button" value="Nhập Thêm"     class="max-w-[400px]  px-2 h-[35px] text-white  bg-blue-500 hover:bg-blue-700 active:bg-red-500 border-gray-600 text-lg border rounded-md m-1 "></a>
</div>