1. Include Date and Time js File


2. Make the Changes as below.
```
 $('#groupsTable').DataTable({
                                        processing: true,
                                        responsive: true,
                                        
                                          "lengthChange": false,
                                         
                                        "ajax":{"url":"rendergroups","dataSrc":""},
                                        // "ajax": "/rendercontacts",
                                        "columns": [
                                          
                                          { data: 'groupname', name: 'groupname' },
                                          { data: 'contactscount', name: 'contactscount' },
                                          {"title": "my date",
                                                       "data": "create_at",
                                                       "type": "date",
                                                       "render":function (value) {
                                                            if (value === null) return "";
                                                            return moment(value).format('DD/MM/YYYY');
                                                           }
                                                      },
                                          { 
                                              "mData": "id",
                                                              "mRender": function (data, type, row) {
                                                                  return "<button class='btn btn-default' title='View Contacts'><i class='fa fa-eye' aria-hidden='true'></i></button><button class='btn btn-primary' title='Send SMS to this Contact'><i class='fa fa-envelope-o' aria-hidden='true'></i></button><button class='btn btn-info' onclick='editGroup("+ data +")' title='Edit this Group'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button><button class='btn btn-danger' onclick='deleteGroup("+ data +")' title='Delete this Group'><i class='fa fa-trash' aria-hidden='true'></i></button>";
                                                              }
                                           }
                                        ]
                                    });      // Groups Page Table
```
