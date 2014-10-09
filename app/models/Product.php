<?php
/**
 * Author: R Daitan
 * 
 */
class Product extends Eloquent {
   
    protected $table = 'products';
    
    protected $fillable = ['product_name', 'selling_price', 'quantity', 'product_type_id', 'brand_id'];
}