<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'mobile', 'email', 'gender', 'country', 'active',
    ];

    /**
     * Fetch only active users in the datatables.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public static function laratablesQueryConditions($query)
    {
        return $query->where('active', true);
    }

    /**
     * Returns the action column html for datatables.
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesCustomAction($user)
    {
        return view('datatables.includes.action')->render();
    }

    /**
     * Returns the name column value for datatables.
     *
     * @param \App\User
     * @return string
     */
    public static function laratablesCustomName($user)
    {
        return $user->first_name . ' ' . $user->last_name;
    }

    /**
     * Additional columns to be loaded for datatables.
     *
     * @return array
     */
    public static function laratablesAdditionalColumns()
    {
        return ['first_name', 'last_name'];
    }

    /**
     * first_name column should be used for sorting when name column is selected in Datatables.
     *
     * @return string
     */
    public static function laratablesOrderName()
    {
        return 'first_name';
    }

    /**
     * Adds the condition for searching the name of the user in the query.
     *
     * @param \Illuminate\Database\Eloquent\Builder
     * @param string search term
     * @param \Illuminate\Database\Eloquent\Builder
     */
    public static function laratablesSearchName($query, $searchValue)
    {
        return $query->orWhere('first_name', 'like', '%'. $searchValue. '%')
            ->orWhere('last_name', 'like', '%'. $searchValue. '%')
        ;
    }

    /**
     * Returns string status from boolean status for the datatables.
     *
     * @return string
     */
    public function laratablesActive()
    {
        return $this->active ? 'Active' : 'Inactive';
    }

    /**
     * Specify row class name for datatables.
     *
     * @return string
     */
    public function laratablesRowClass()
    {
        return $this->active ? 'text-success' : 'text-danger';
    }

    /**
     * Returns the data attribute for row id of the user.
     *
     * @return array
     */
    public function laratablesRowData()
    {
        return [
            'id' => $this->id,
        ];
    }
}
