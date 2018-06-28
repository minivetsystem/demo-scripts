from django.http import HttpResponse
from django.template import loader
import sys

def index(request):
    template = loader.get_template('index.html')
    from .models import Slider ,Contact
    sliders = Slider.objects.values()
    from .forms import ContactForm
    if request.method == 'POST':
        form = ContactForm(data=request.POST)
        from django.core.mail import send_mail
        if form.is_valid():
			name = request.POST.get('name', '')
			email = request.POST.get('email', '')
			content = request.POST.get('content', '')
			cost_obj = Contact(name=name, email=email, content=content)
			cost_obj.save()
			send_mail(name, email, 'smriti9800@gmail.com', [email])
    else:
        form = ContactForm()


    context = {
        'sliders':sliders,
        'form':form
    }

    return HttpResponse(template.render(context, request))