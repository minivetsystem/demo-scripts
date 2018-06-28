# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.contrib import admin
from .models import Slider, Contact

# Register your models here.
class SliderAdmin(admin.ModelAdmin):
    list_display = ('id', 'image', 'header_text', 'footer_text', 'status')
    list_display_links = ('id', 'image')
    list_filter = ('header_text','footer_text')
    search_fields = ('header_text', 'status')
    list_per_page = 10


# class FooAdmin(admin.ModelAdmin):
#     # regular stuff
#     class Media:
#         js = (
#             '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', # jquery
#             'js/myscript.js',       # project static folder
#             'app/js/myscript.js',   # app static folder
#         )

# admin.site.register(Foo, FooAdmin)

admin.site.register(Slider, SliderAdmin)
admin.site.register(Contact)
