# -*- coding: utf-8 -*-
from __future__ import unicode_literals

from django.db import models
import pytz
# Create your models here.
class Slider(models.Model):
	STATUS_CHOICES = (
		(1,'First'),
		(2,'Any'),
		(0,'In-Active')
	)
	image = models.FileField(upload_to='slider', blank=True)
	header_text = models.CharField(max_length=200)
	footer_text = models.CharField(max_length=200)
	status = models.IntegerField(choices=STATUS_CHOICES, default=0)

	def __str__(self):
		return self.header_text

class Contact(models.Model):
	name = models.CharField(max_length=200)
	email =  models.EmailField(max_length=70)
	content = models.TextField()
	created = models.DateTimeField(auto_now_add=True)

	def __str__(self):
		return self.email
		
