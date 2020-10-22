<?php

class Dokumen_model extends CI_Model {
	public function delete($id)
	{
		if ( ! $dokumen = $this->db->where('id', $id)->get('dokumen')->row())
		{
			return false;
		}

		// Hapus file dokumen
		unlink(FCPATH . $dokumen->path);
			
		// Hapus dokumen di database
		$this->db->delete('dokumen', compact('id'));

		if ($this->db->affected_rows() === 0)
		{
			return false;
		}

		return true;
	}
}
