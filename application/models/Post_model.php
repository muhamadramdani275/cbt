<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Post_model extends CI_Model { public function getPostUser($id_user) { goto HNsOO; tpq8q: if (!($id_user != 0)) { goto tvnKW; } goto TYBFS; svLb_: $this->db->order_by("\x61\x2e\165\x70\144\141\164\145\144", "\144\145\163\x63"); goto N5Pqr; V6sRF: tvnKW: goto svLb_; ERtnp: $this->db->from("\160\x6f\x73\x74\40\141"); goto MUMM5; MUMM5: $this->db->join("\155\x61\163\164\145\162\137\147\x75\162\x75\x20\x62", "\141\x2e\x64\x61\162\151\x3d\142\x2e\151\x64\137\x67\x75\162\x75", "\x6c\145\146\164"); goto tpq8q; TYBFS: $this->db->where("\141\56\144\x61\x72\x69", $id_user); goto V6sRF; CRq26: return $posts; goto ixLtP; N5Pqr: $posts = $this->db->get()->result(); goto CRq26; HNsOO: $this->db->select("\141\x2e\x2a\x2c\x20\142\x2e\156\141\155\x61\137\x67\x75\162\165\x2c\40\142\x2e\x66\157\164\157\x2c\x20\x28\123\x45\x4c\105\103\x54\40\103\117\125\116\124\x28\x70\x6f\163\x74\137\143\157\155\155\x65\x6e\x74\x73\x2e\x69\144\137\143\157\155\x6d\x65\156\x74\51\x20\x46\122\x4f\115\40\x70\x6f\163\x74\137\x63\x6f\155\x6d\x65\156\x74\163\40\127\x48\x45\x52\105\40\x61\x2e\151\144\x5f\160\x6f\163\164\x20\75\x20\160\x6f\163\164\137\143\157\155\155\x65\x6e\x74\163\x2e\x69\144\x5f\160\157\x73\164\51\x20\101\123\x20\x6a\x6d\x6c"); goto ERtnp; ixLtP: } public function getPostForUser($kepada, $kelas = null) { goto h_X8E; qlP9y: $this->db->join("\155\141\x73\x74\x65\162\x5f\147\x75\x72\165\40\x62", "\141\x2e\144\141\x72\x69\x3d\x62\56\151\x64\137\147\x75\162\x75", "\x6c\145\146\164"); goto ZBHZt; BBqLw: $this->db->where("\x28\141\x2e\153\x65\x70\x61\144\141\40\x4c\x49\113\105\40" . $kepada . "\51\40\x4f\122\40\50\x61\56\153\145\x70\x61\x64\141\x20\x4c\111\x4b\x45\40" . $kelas . "\x29"); goto F3u4M; DUqaA: return $posts; goto PLHvq; E5boL: $this->db->order_by("\141\56\165\x70\144\x61\x74\145\x64", "\144\x65\163\x63"); goto nRt4T; reyfz: $this->db->from("\160\157\x73\164\40\x61"); goto qlP9y; ZBHZt: if (!($kepada != null)) { goto Ps_Mi; } goto BBqLw; F3u4M: Ps_Mi: goto E5boL; nRt4T: $posts = $this->db->get()->result(); goto DUqaA; h_X8E: $this->db->select("\141\x2e\x2a\54\x20\142\x2e\x6e\x61\x6d\x61\137\x67\165\162\x75\54\40\142\56\146\157\164\157\x2c\40\x28\x53\105\x4c\105\103\124\x20\x43\117\x55\116\x54\50\x70\157\x73\x74\137\143\157\x6d\x6d\x65\x6e\x74\x73\x2e\x69\x64\137\143\157\x6d\155\x65\156\x74\51\40\106\x52\117\x4d\x20\x70\157\163\x74\137\143\157\x6d\155\x65\156\164\x73\40\x57\110\x45\x52\x45\40\141\56\x69\x64\137\x70\157\163\164\x20\x3d\40\x70\157\163\164\137\x63\157\x6d\x6d\x65\x6e\164\x73\x2e\x69\144\137\x70\x6f\x73\x74\51\x20\x41\123\x20\x6a\155\154"); goto reyfz; PLHvq: } public function getIdComments($id_post) { goto opItz; opItz: $this->db->select("\151\x64\137\x63\x6f\x6d\155\145\x6e\164"); goto hDeob; NTqr6: $ids = $this->db->get("\x70\157\163\x74\x5f\x63\x6f\155\x6d\145\x6e\x74\x73")->result(); goto q3PTO; q3PTO: return $ids; goto rsthg; hDeob: $this->db->where("\151\144\x5f\x70\157\163\x74", $id_post); goto NTqr6; rsthg: } public function getIdReplies($id_comment) { goto PY7sr; KTA1G: y5ypP: goto qIs5w; qIs5w: $this->db->where_in("\151\144\137\143\157\x6d\155\x65\156\164", $id_comment); goto RFvlU; PY7sr: $this->db->select("\x69\144\x5f\x72\x65\160\x6c\x79"); goto eSP2p; RFvlU: vJoYJ: goto BSXLS; wlnW2: return $ids; goto BGrPQ; eSP2p: if (is_array($id_comment)) { goto y5ypP; } goto aEETs; aEETs: $this->db->where("\x69\144\137\x63\157\x6d\155\145\156\164", $id_comment); goto yTKct; BSXLS: $ids = $this->db->get("\x70\157\x73\x74\x5f\x72\145\x70\154\171")->result(); goto wlnW2; yTKct: goto vJoYJ; goto KTA1G; BGrPQ: } }
