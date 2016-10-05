class ApplicationController < ActionController::Base
  protect_from_forgery with: :exception

  def hellow
  	render html: "hellow"
  end
end
