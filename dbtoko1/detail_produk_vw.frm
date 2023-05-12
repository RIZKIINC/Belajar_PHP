TYPE=VIEW
query=select `p`.`id` AS `id`,`p`.`kode` AS `kode`,`p`.`nama` AS `nama`,`p`.`harga_beli` AS `harga_beli`,`p`.`harga_jual` AS `harga_jual`,`p`.`stok` AS `stok`,`p`.`min_stok` AS `min_stok`,`p`.`jenis_produk_id` AS `jenis_produk_id`,`j`.`nama` AS `jenis` from (`dbtoko1`.`jenis_produk` `j` join `dbtoko1`.`produk` `p` on(`p`.`jenis_produk_id` = `j`.`id`))
md5=95427964c3581ac67b537527be578c8e
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=0001683078421125028
create-version=2
source=SELECT p.*, j.nama AS jenis FROM jenis_produk j INNER JOIN produk p ON p.jenis_produk_id = j.id
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `p`.`id` AS `id`,`p`.`kode` AS `kode`,`p`.`nama` AS `nama`,`p`.`harga_beli` AS `harga_beli`,`p`.`harga_jual` AS `harga_jual`,`p`.`stok` AS `stok`,`p`.`min_stok` AS `min_stok`,`p`.`jenis_produk_id` AS `jenis_produk_id`,`j`.`nama` AS `jenis` from (`dbtoko1`.`jenis_produk` `j` join `dbtoko1`.`produk` `p` on(`p`.`jenis_produk_id` = `j`.`id`))
mariadb-version=100427
