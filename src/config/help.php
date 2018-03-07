<?php

return [
        'method_list' => ['getRoleList', 'getRoleDetail', 'createRole', 'updateRole', 'deleteRole'],
        //Role
        'getRoleList' => [
            'params' => [],
            'output' => [
                [
                    'attributes.name'       => 'Role name',
                    'attributes.ref_type'   => 'Reference Type',
                    'attributes.ref_id'     => 'Reference ID',
                    'attributes.created_at' => 'Create date time',
                    'attributes.updated_at' => 'Update date time',
                    'id'                    => 'Role ID',
                ]
            ]
        ],
        'getRoleDetail' => [
            'params' => [
                'id' => 'Role ID',
            ],
            'output' => [
                'attributes.name'        => 'Role name',
                'attributes.ref_type'    => 'Reference Type',
                'attributes.ref_id'      => 'Reference ID',
                'attributes.created_at'  => 'Create date time',
                'attributes.updated_at'  => 'Update date time',
                'attributes.permissions' => 'Permission for the role',
                'id'                     => 'Role ID',
            ]
        ],
        'createRole' => [
            'params' => [
                'name'     => 'required',
                'ref_type' => 'required',
                'ref_id'   => 'required',
            ],
            'output' => [
                'attributes.name'       => 'Role name',
                'attributes.ref_type'   => 'Reference Type',
                'attributes.ref_id'     => 'Reference ID',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Role ID',
            ]
        ],
        'updateRole' => [
            'params' => [
                'id'       => 'required'
                'name'     => 'not required',
                'ref_type' => 'not required',
                'ref_id'   => 'not required',
            ],
            'output' => [
                'attributes.name'       => 'Role name',
                'attributes.ref_type'   => 'Reference Type',
                'attributes.ref_id'     => 'Reference ID',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Role ID',
            ]
        ],
        'deleteRole' => [
            'params' => [
                'id'       => 'required'
            ],
            'output' => [
                'attributes.name'       => 'Role name',
                'attributes.ref_type'   => 'Reference Type',
                'attributes.ref_id'     => 'Reference ID',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Role ID',
            ]
        ]
        //Permission
        'getPermissionList' => [
            'params' => [],
            'output' => [
                [
                    'attributes.module'     => 'Module name',
                    'attributes.role_id'    => 'Role ID',
                    'attributes.can_read'   => 'Can Read',
                    'attributes.can_create' => 'Can Create',
                    'attributes.can_update' => 'Can Update',
                    'attributes.can_delete' => 'Can Delete',
                    'attributes.created_at' => 'Create date time',
                    'attributes.updated_at' => 'Update date time',
                    'id'                    => 'Permission ID',
                ]
            ]
        ],
        'getPermissionDetail' => [
            'params' => [
                'id' => 'Role ID',
            ],
            'output' => [
                'attributes.module'     => 'Module name',
                'attributes.role_id'    => 'Role ID',
                'attributes.can_read'   => 'Can Read',
                'attributes.can_create' => 'Can Create',
                'attributes.can_update' => 'Can Update',
                'attributes.can_delete' => 'Can Delete',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Permission ID',
            ]
        ],
        'createPermission' => [
            'params' => [
                'module'     => 'required',
                'role_id'    => 'required',
                'can_read'   => 'not required',
                'can_create' => 'not required',
                'can_update' => 'not required',
                'created_at' => 'not required',
            ],
            'output' => [
                'attributes.module'     => 'Module name',
                'attributes.role_id'    => 'Role ID',
                'attributes.can_read'   => 'Can Read',
                'attributes.can_create' => 'Can Create',
                'attributes.can_update' => 'Can Update',
                'attributes.can_delete' => 'Can Delete',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Permission ID',
            ]
        ],
        'updatePermission' => [
            'params' => [
                'id'         => 'required',
                'module'     => 'not required',
                'role_id'    => 'notrequired',
                'can_read'   => 'not required',
                'can_create' => 'not required',
                'can_update' => 'not required',
                'created_at' => 'not required',
            ],
            'output' => [
                'attributes.module'     => 'Module name',
                'attributes.role_id'    => 'Role ID',
                'attributes.can_read'   => 'Can Read',
                'attributes.can_create' => 'Can Create',
                'attributes.can_update' => 'Can Update',
                'attributes.can_delete' => 'Can Delete',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Permission ID',
            ]
        ],
        'deletePermission' => [
            'params' => [
                'id'       => 'required'
            ],
            'output' => [
                'attributes.module'     => 'Module name',
                'attributes.role_id'    => 'Role ID',
                'attributes.can_read'   => 'Can Read',
                'attributes.can_create' => 'Can Create',
                'attributes.can_update' => 'Can Update',
                'attributes.can_delete' => 'Can Delete',
                'attributes.created_at' => 'Create date time',
                'attributes.updated_at' => 'Update date time',
                'id'                    => 'Permission ID',
            ]
        ]
    ];