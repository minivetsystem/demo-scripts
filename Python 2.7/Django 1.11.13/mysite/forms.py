from django import forms

class ContactForm(forms.Form):
	name = forms.CharField(max_length=200, widget=forms.TextInput(attrs={'class':'form-control mt-20','placeholder':'Your name'}))
	email = forms.EmailField(max_length=70, widget=forms.TextInput(attrs={'class':'common-input mt-10','placeholder':'Enter email address'}))
	content = forms.CharField(widget=forms.Textarea(attrs={'class':'form-control mt-20','placeholder':'Messege'}))