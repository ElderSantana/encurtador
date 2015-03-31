<?php

class shortener extends Eloquent  {

	protected $table = 'url_shortened';
	protected $primarykey = 'id';
	protected $guarded = array('id');
	public $timestamps = false;
}
