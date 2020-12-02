TYPE=VIEW
query=select `a`.`id_hewan` AS `id_hewan`,`a`.`jenis` AS `jenis`,`a`.`ras` AS `ras`,`a`.`tgl_rescue` AS `tgl_rescue`,`b`.`nama` AS `nama` from (`adopsihewan`.`hewan` `a` left join `adopsihewan`.`shelter` `b` on((`a`.`id_shelter` = `b`.`id_shelter`)))
md5=13ada169a24701e9a79037254b4cd20d
updatable=0
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2020-11-30 14:55:15
create-version=2
source=select a.id_hewan, a.jenis, a.ras, a.tgl_rescue, b.nama from hewan a left join shelter b on a.id_shelter=b.id_shelter
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `a`.`id_hewan` AS `id_hewan`,`a`.`jenis` AS `jenis`,`a`.`ras` AS `ras`,`a`.`tgl_rescue` AS `tgl_rescue`,`b`.`nama` AS `nama` from (`adopsihewan`.`hewan` `a` left join `adopsihewan`.`shelter` `b` on((`a`.`id_shelter` = `b`.`id_shelter`)))
mariadb-version=100130
