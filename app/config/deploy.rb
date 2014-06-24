set :application,   "Ecoinmobile"
set :deploy_to,     "/var/www/ecoinmobile.com/symfony_projects/frontend"
set :domain,        "ecoinmobile.com"
set :app_path, "app"
set :web_path, "web"

set :repository,    "https://mloyolatirado:213260977@bitbucket.org/mloyolatirado/ecoinmobile_frontend.git"
set :scm, :git
set :scm_username, "mloyolatirado"
set :deploy_via, :remote_cache
set :branch, 'master'
 
set :model_manager, "doctrine"

role  :web,           domain
role  :app,           domain, :primary => true

set   :use_sudo,      false
set   :keep_releases, 3
ssh_options[:forward_agent] = true