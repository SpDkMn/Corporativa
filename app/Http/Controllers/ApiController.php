<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        header('Content-type: application/json');
        switch($id){
          case "home":
            return $this->home();
          case "partners":
            return $this->partners();
          case "servicios":
            return $this->servicios();
          case "productos":
            return $this->productos();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function home()
    {
      return '{
        "head":{
          "title": "Apu Group",
          "meta":[
            {
              "http-equiv": "Content-Type",
              "content": "text/html,charset=utf-8"
            },
            {
              "http-equiv":"Content-Language",
              "content": "es"
            },
            {
              "name": "viewport",
              "content": "width=device-width, initial-scale=1"
            },
            {
              "name": "description",
              "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            },

            {
              "name": "author",
              "content": "@autor"
            }
          ]
        },
        "body":{
          "menu":[
            "Partners",
            "Servicios",
            "Productos",
            "Noticias",
            "Blog",
            "Contacto",
            "Acerca de"
          ],
          "slider":[
            {
              "img":{
                "src":"img1.png",
                "alt":"name 1"
              }
            },
            {
              "img":{
                "src":"img2.png",
                "alt":"name 2"
              }
            },
            {
              "img":{
                "src":"img3.png",
                "alt":"name 3"
              }
            }
          ],
          "blocks":[
            {
              "title":"Nosotros",
              "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
            },
            {
              "title":"Mision",
              "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
            },
            {
              "title":"Vision",
              "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
            },
            {
              "title":"Equipo",
              "items": [
                {
                  "img":{
                    "src":"img1.png",
                    "alt":"name 1"
                  },
                  "title":"CEO",
                  "name":"Raul Torres",
                  "email":"rtorres@apu-group.la",
                  "skype":"rtorres@apu-group.la"
                },
                {
                  "img":{
                    "src":"img2.png",
                    "alt":"name 2"
                  },
                  "title":"CEO",
                  "name":"Raul Torres",
                  "email":"rtorres@apu-group.la",
                  "skype":"rtorres@apu-group.la"
                },
                {
                  "img":{
                    "src":"img3.png",
                    "alt":"name 3"
                  },
                  "title":"CEO",
                  "name":"Raul Torres",
                  "email":"rtorres@apu-group.la",
                  "skype":"rtorres@apu-group.la"
                },
                {
                  "img":{
                    "src":"img4.png",
                    "alt":"name 4"
                  },
                  "title":"CEO",
                  "name":"Raul Torres",
                  "email":"rtorres@apu-group.la",
                  "skype":"rtorres@apu-group.la"
                },
                {
                  "img":{
                    "src":"img5.png",
                    "alt":"name 5"
                  },
                  "title":"CEO",
                  "name":"Raul Torres",
                  "email":"rtorres@apu-group.la",
                  "skype":"rtorres@apu-group.la"
                },
                {
                  "img":{
                    "src":"img6.png",
                    "alt":"name 6"
                  },
                  "title":"CEO",
                  "name":"Raul Torres",
                  "email":"rtorres@apu-group.la",
                  "skype":"rtorres@apu-group.la"
                }
              ]
            }
          ]
        }
      }';
    }

    public function partners()
    {
      return '{
        "head":{
          "title": "Apu Group | Partners",
          "meta":[
            {
              "http-equiv": "Content-Type",
              "content": "text/html,charset=utf-8"
            },
            {
              "http-equiv":"Content-Language",
              "content": "es"
            },
            {
              "name": "viewport",
              "content": "width=device-width, initial-scale=1"
            },
            {
              "name": "description",
              "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            },

            {
              "name": "author",
              "content": "@autor"
            }
          ]
        },
        "body":{
          "menu":[
            "Partners",
            "Servicios",
            "Productos",
            "Noticias",
            "Blog",
            "Contacto",
            "Acerca de"
          ],
          "partners":{
            "img":{
              "src":"img1.png",
              "alt":"name 1"
            },
            "items":[
              {
                "img":{
                  "src":"img1.png",
                  "alt":"name 1"
                }
              },
              {
                "img":{
                  "src":"img2.png",
                  "alt":"name 2"
                }
              },
              {
                "img":{
                  "src":"img3.png",
                  "alt":"name 3"
                }
              },
              {
                "img":{
                  "src":"img4.png",
                  "alt":"name 4"
                }
              }
            ]
          },
          "customers":{
            "img":{
              "src":"img1.png",
              "alt":"name 1"
            },
            "items":[
              {
                "img":{
                  "src":"img1.png",
                  "alt":"name 1"
                }
              },
              {
                "img":{
                  "src":"img2.png",
                  "alt":"name 2"
                }
              },
              {
                "img":{
                  "src":"img3.png",
                  "alt":"name 3"
                }
              },
              {
                "img":{
                  "src":"img4.png",
                  "alt":"name 4"
                }
              }
            ]
          }
        }
      }';
    }

    public function servicios()
    {
      return '{
        "head":{
          "title": "Apu Group | Servicios",
          "meta":[
            {
              "http-equiv": "Content-Type",
              "content": "text/html,charset=utf-8"
            },
            {
              "http-equiv":"Content-Language",
              "content": "es"
            },
            {
              "name": "viewport",
              "content": "width=device-width, initial-scale=1"
            },
            {
              "name": "description",
              "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            },

            {
              "name": "author",
              "content": "@autor"
            }
          ]
        },
        "body":{
          "menu":[
            "Partners",
            "Servicios",
            "Productos",
            "Noticias",
            "Blog",
            "Contacto",
            "Acerca de"
          ],
            "items":[
              {
                "img":{
                  "src":"img1.png",
                  "alt":"name 1"
                },
                "article":{
                  "title":"Nosotros",
                  "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
                }
              },
              {
                "img":{
                  "src":"img2.png",
                  "alt":"name 2"
                },
                "article":{
                  "title":"Nosotros",
                  "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
                }
              },
              {
                "img":{
                  "src":"img3.png",
                  "alt":"name 3"
                },
                "article":{
                  "title":"Nosotros",
                  "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
                }
              },
              {
                "img":{
                  "src":"img4.png",
                  "alt":"name 4"
                },
                "article":{
                  "title":"Nosotros",
                  "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
                }
              }
            ]
        }
      }';
    }

    public function productos()
    {
      return '{
        "head":{
          "title": "Apu Group | Servicios",
          "meta":[
            {
              "http-equiv": "Content-Type",
              "content": "text/html,charset=utf-8"
            },
            {
              "http-equiv":"Content-Language",
              "content": "es"
            },
            {
              "name": "viewport",
              "content": "width=device-width, initial-scale=1"
            },
            {
              "name": "description",
              "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
            },

            {
              "name": "author",
              "content": "@autor"
            }
          ]
        },
        "body":{
          "menu":[
            "Partners",
            "Servicios",
            "Productos",
            "Noticias",
            "Blog",
            "Contacto",
            "Acerca de"
          ],
            "items":[
              {
                "img":{
                  "src":"img1.png",
                  "alt":"name 1"
                },
                "article":{
                  "title":"Nosotros",
                  "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
                }
              },
              {
                "img":{
                  "src":"img2.png",
                  "alt":"name 2"
                },
                "article":{
                  "title":"Nosotros",
                  "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
                }
              },
              {
                "img":{
                  "src":"img3.png",
                  "alt":"name 3"
                },
                "article":{
                  "title":"Nosotros",
                  "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
                }
              },
              {
                "img":{
                  "src":"img4.png",
                  "alt":"name 4"
                },
                "article":{
                  "title":"Nosotros",
                  "paraph":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Consectetur adipiscing elit ut aliquam purus sit amet luctus. Libero justo laoreet sit amet cursus sit amet dictum sit. Eros in cursus turpis massa tincidunt. Pharetra convallis posuere morbi leo urna molestie at elementum eu. Id volutpat lacus laoreet non curabitur gravida arcu. Sed risus ultricies tristique nulla aliquet. In nulla posuere sollicitudin aliquam ultrices sagittis. Vel eros donec ac odio tempor orci dapibus ultrices. Vel risus commodo viverra maecenas accumsan. Duis convallis convallis tellus id interdum velit laoreet. Faucibus turpis in eu mi bibendum neque egestas. Venenatis urna cursus eget nunc scelerisque viverra mauris in aliquam. Cursus mattis molestie a iaculis at erat pellentesque adipiscing. Sed felis eget velit aliquet sagittis. Pharetra vel turpis nunc eget lorem dolor sed. Imperdiet nulla malesuada pellentesque elit eget gravida cum sociis natoque. Netus et malesuada fames ac turpis egestas sed tempus. Lacinia quis vel eros donec ac.\nCum sociis natoque penatibus et magnis dis parturient montes. Ullamcorper a lacus vestibulum sed arcu. Diam maecenas sed enim ut sem. Justo nec ultrices dui sapien eget mi. Non consectetur a erat nam at lectus urna duis. Aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque habitant. Mauris rhoncus aenean vel elit scelerisque mauris pellentesque pulvinar pellentesque. In ante metus dictum at tempor commodo. Ullamcorper morbi tincidunt ornare massa. Nulla malesuada pellentesque elit eget gravida cum sociis natoque penatibus. Sit amet dictum sit amet. Cursus risus at ultrices mi tempus."
                }
              }
            ]
        }
      }';
    }
}
