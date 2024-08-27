[![tests](https://github.com/AuroraWP/ddev-typesense/actions/workflows/tests.yml/badge.svg)](https://github.com/AuroraWP/ddev-typesense/actions/workflows/tests.yml)

# ddev-typesense

This repository allows you to quickly install [typesense](https://typesense.org/) into a [DDEV](https://ddev.readthedocs.io)
project using just `ddev get AuroraWP/ddev-typesense`.

## Installation

1. `ddev get AuroraWP/ddev-typesense`
2. `ddev restart`

## Usage

Once installed, you can access the [typesense dashboard](https://github.com/bfritscher/typesense-dashboard) at `https://typesense.{{DDEV_HOSTNAME}}:8109/#/login`
and the typesense API at `https://{{DDEV_HOSTNAME}}:8108/health`.

So if your site is `mysite.ddev.site`, you would access the dashboard at `https://typesense.mysite.ddev.site:8109/#/login`
and the API at `https://mysite.ddev.site:8108/health`.

## Configuration

Public API access:

- Port: `8108`
- Host: `{{DDEV_HOSTNAME}}`
- Protocol: `https`
- Search API key: `ddev`

Admin API access from within the DDEV container:

- Port: `8108`
- Host: `typesense`
- Protocol: `http`
- Admin API key: `ddev`
