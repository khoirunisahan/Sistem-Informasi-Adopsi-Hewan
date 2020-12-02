TYPE=VIEW
query=select `a`.`id_hewan` AS `id_hewan`,`a`.`jenis` AS `jenis`,`a`.`ras` AS `ras`,`a`.`Warna` AS `warna`,`b`.`Nama` AS `nama`,`c`.`tgl_adopt` AS `tgl_adopt` from ((`adopsihewan`.`daftaradopsi` `c` join `adopsihewan`.`hewan` `a` on((`a`.`id_hewan` = `c`.`id_hewan`))) join `adopsihewan`.`adopter` `b` on((`b`.`Id_adopter` = `c`.`id_adopter`)))
md5=a352a89c4189573355372756f2ab4644
updatable=1
algorithm=0
definer_user=root
definer_host=localhost
suid=2
with_check_option=0
timestamp=2020-11-23 15:20:54
create-version=2
source=SELECT a.id_hewan, a.jenis, a.ras, a.warna, b.nama, c.tgl_adopt from daftaradopsi c  join hewan a on a.id_hewan = c.id_hewan join adopter b on b.id_adopter = c.id_adopter
client_cs_name=utf8mb4
connection_cl_name=utf8mb4_unicode_ci
view_body_utf8=select `a`.`id_hewan` AS `id_hewan`,`a`.`jenis` AS `jenis`,`a`.`ras` AS `ras`,`a`.`Warna` AS `warna`,`b`.`Nama` AS `nama`,`c`.`tgl_adopt` AS `tgl_adopt` from ((`adopsihewan`.`daftaradopsi` `c` join `adopsihewan`.`hewan` `a` on((`a`.`id_hewan` = `c`.`id_hewan`))) join `adopsihewan`.`adopter` `b` on((`b`.`Id_adopter` = `c`.`id_adopter`)))
mariadb-version=100130
