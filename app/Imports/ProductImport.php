<?php

namespace App\Imports;

use App\Models\Product;
use App\Rules\ImeiUniqueRule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\ToArray;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductImport implements ToModel
{
    public $request;
    public function __construct($request)
    {
        $this->request = $request;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        if (is_int($row[0])) {
            $data = [
                'title' => $row[1],
                'imei_no_1' => $row[2],
                'imei_no_2' => $row[3],
                'serial_no' => $row[4],
                'regional_distributor' => $row[5],
                'retail_store' => $row[6],
                'product_category_id' => $this->request['product_category_id'],
                'product_model_id' => $this->request['product_model_id'],
                'is_imei' => isset($row[1]) || isset($row[2]) ? 1 : 0,

            ];
            Product::create($data);
        }
    }

}
